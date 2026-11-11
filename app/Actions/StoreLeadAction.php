<?php

namespace App\Actions;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use App\Notifications\LeadNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class StoreLeadAction
{
    /**
     * Store the lead and notify the recipients configured in config/leads.php.
     */
    public function handle(StoreLeadRequest $request): Lead
    {
        $lead = Lead::create([
            'tel' => $request->phone(),
            'msg' => $request->input('msg'),
            'source' => $request->input('source'),
            'page_url' => $request->input('page_url'),
            'ip_address' => $request->ip(),
            'user_agent' => Str::limit((string) $request->userAgent(), 500, ''),
        ]);

        $this->notify($lead);

        return $lead;
    }

    /**
     * Send the lead notification to every configured recipient.
     */
    private function notify(Lead $lead): void
    {
        /** @var list<string> $recipients */
        $recipients = config('leads.recipients');

        if ($recipients === []) {
            Log::warning('Заявка сохранена, но адреса для рассылки не настроены (config/leads.php).', [
                'lead_id' => $lead->id,
            ]);

            return;
        }

        $notification = new LeadNotification($lead);
        $notifiable = Notification::route('mail', $recipients);

        if (config('leads.notification.queue')) {
            $notifiable->notify($notification);

            return;
        }

        $notifiable->notifyNow($notification);
    }
}
