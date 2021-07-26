<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;

class alert1 extends Notification implements ShouldQueue
{
    use Queueable;
     use Notifiable;
     private $invoice;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($invoice)
    {
       $this->invoice = $invoice;
     }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/search/'.$this->invoice->numero);
        return (new MailMessage)
        ->subject('Alert 1! sur la caution Numero '.$this->invoice->numero)
                ->markdown('mail1', ['url' => $url, 'numero' => $this->invoice->numero, 'montant' => $this->invoice->montant , 'datealert1' => $this->invoice->datealert1]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

   public function toDatabase($notifiable)
{
    return [
        'numero' => $this->invoice->numero,
        'date' => $this->invoice->datealert1,
    ];
}

    public function toArray($notifiable)
{ return [];
}

}