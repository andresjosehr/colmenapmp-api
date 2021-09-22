<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Burden;
use App\Models\Couple;
use App\Models\User;
use App\Http\Controllers\ApiResponseController;
use Illuminate\Support\Facades\Http;
use App\Models\Contact as ContactModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function makeContact(Request $request){
        
        $client=new Client();
        foreach(Client::fields() as $field){
            $client[$field] = isset($request->client[$field]) ? $request->client[$field] : null;
        }
        $client->save();


        $contact = ContactModel::create([
            "plan_id" => $request->plan_id,
            "client_id" => $client->id,
            "message" => isset($request->client["message"]) ? $request->client["message"] : null
        ]);

        $contact->save();

        if($request->burdens){
            foreach($request->burdens as $burden){
                $burdenModel = new Burden();

                $burdenModel->age   = $burden["age"];
                $burdenModel->gender = $burden["gender"];
                $burdenModel->client_id = $client->id;

                $burdenModel->save();
            }
        }

        if(isset($request->client["couple"])){
            $contact = Couple::create([
                "age"    => $request->coupleProfile["age"],
                "gender" => $request->coupleProfile["gender"],
                "type"   => $request->coupleProfile["monthly_liquid_income"] == 0 ? "Carga" : "Contribuyente",
                "monthly_liquid_income" => $request->coupleProfile["monthly_liquid_income"],
                "client_id" => $client->id
            ]);
        }


        return ApiResponseController::respond(200, "Contact made", null);
        
    }

    public function sendContactNotificationToWhatsapp(Request $request){
        $users = User::where("role_id", 1)
                    ->where("whatsapp_api_token", "<>", "NULL")
                    ->where("phone", "<>", "NULL")->get();
        $contacts = ContactModel::where("whatsapp_notified", false)->with("client.burdens", "client.isapre", "client.region", "client.couple", "plan")->get();
        
        foreach($contacts as $contact){
            
            $planName="No especificado";
            if($contact->plan!=null){
                $planName=$contact->plan->name;
            }
            $text='';
            $text.="\n*Plan*: ".$planName;
            $text.="\n*Nombre*: ".$contact->client->full_name;
            $text.="\n*RUT*: ".$contact->client->rut;
            $text.= "\n*Edad*: ". ($contact->client->age ? $contact->client->age : 'No especificado');
            $text.= "\n*Genero*: ". ($contact->client->gender ? $contact->client->gender : 'No especificado');
            $text.= "\n*Renta mensual liquida:*: ".($contact->client->monthly_liquid_income ? $contact->client->monthly_liquid_income : 'No especificado');
            
            $text.="\n*Email*: ".$contact->client->email;
            $text.="\n*Telefono*: ".$contact->client->phone;
            $text.="\n*Isapre*: ".$contact->client->isapre->name;
            $text.= "\n*Region*: ". ($contact->client->region ? $contact->client->region->name : 'No especificado');

            if($contact->client->preferent_contact_time_start && $contact->client->preferent_contact_time_end){
                $text.="\n*Hora de preferencia de contacto*: Desde las ".$contact->client->preferent_contact_time_start." Hasta las ".$contact->client->preferent_contact_time_end;
            }else{
                $text.="\n*Hora de preferencia de contacto*: No especificada";
            }
            

            if($contact->client->couple){
                $text.="\n\n*Pareja*: \n";
                $text.= "\n*Edad*: ". ($contact->client->couple->age ? $contact->client->couple->age : "No especificado");
                $text.= "\n*Genero*: ". ($contact->client->couple->gender ? $contact->client->couple->gender : "No especificado");
                $text.= "\n*Renta mensual liquida*: ". ($contact->client->couple->monthly_liquid_income ? $contact->client->couple->monthly_liquid_income : "No especificado");
                $text.= "\n*Tipo:*: ". ($contact->client->couple->type ? $contact->client->couple->type : "No especificado");
            }
            
            $text.="\n\n*Cargas*: \n";

            foreach($contact->client->burdens as $burden){
                $text.="\n*Edad*: ". $burden->age;
                $text.="\n*Genero*: ". $burden->gender;
                $text.="\n------------------";
            }

            $text.="\n\n*Mensage*: \n". $contact->message;

            foreach ($users as $user) {
                $response = Http::get("https://api.callmebot.com/whatsapp.php?phone=".$user->phone."&text=$text&apikey=".$user->whatsapp_api_token);
            }
        }

        ContactModel::where("whatsapp_notified", false)->update(["whatsapp_notified" => true]);

        $users2 = User::where("role_id", 1)->get();
        $contacts2 = ContactModel::where("email_notified", "0")->with("client.burdens", "client.isapre", "client.region", "client.couple", "plan")->get();

        foreach($contacts2 as $contact){
            foreach($users2 as $user){
                Mail::to($user)->send(new Contact($contact));
                
            }

        }

        ContactModel::where("email_notified", false)->update(["email_notified" => true]);



        return "Success";

        

    }

}