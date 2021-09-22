<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPassword extends Notification
{
    use Queueable;
    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->greeting('Hola!')
                ->subject('Solicitud de cambio de contraseña')
                ->line('Hemos recibido una solicitud de cambio de contraseña')
                ->line('Confirma la solicitud dando click en el boton de abajo')
                ->action('Cambiar contraseña', \Config::get("app.front_url")."/cambiar-password;token=".$this->token.";email=".request()->email)
                ->line('Si no has sido tu, cambia tu contraseña para asegurar la integridad de tu cuenta')
                ->salutation('Equipo de soporte de colmenapmp');
    
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
