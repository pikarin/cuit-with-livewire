<?php

namespace App\Notifications;

use App\Models\Cuit;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class NewCuit extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Cuit $cuit)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("New Cuit from {$this->cuit->user->name}")
            ->greeting("New Cuit from {$this->cuit->user->name}")
            ->line(Str::limit($this->cuit->message, 50))
            ->action('Go to Cuitan', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
