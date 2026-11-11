<?php

namespace App\Notifications;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LeadNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Lead $lead)
    {
        $this->onQueue(config('leads.notification.queue_name'));
    }

    /**
     * Get the notification delivery channels.
     *
     * @return list<string>
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
            ->subject(config('leads.notification.subject'))
            ->markdown('emails.lead', [
                'lead' => $this->lead,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'lead_id' => $this->lead->id,
            'tel' => $this->lead->tel,
        ];
    }
}
