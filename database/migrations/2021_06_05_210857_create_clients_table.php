<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("rut");
            $table->string("email");
            $table->string("phone");
            $table->integer("monthly_liquid_income")->nullable();
            $table->integer("isapre_id");
            $table->integer("age")->nullable();
            $table->string("gender")->nullable();
            $table->string("preferent_contact_time_start")->nullable();
            $table->string("preferent_contact_time_end")->nullable();
            $table->integer("region_id")->nullable();
            $table->integer("user_id")->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
