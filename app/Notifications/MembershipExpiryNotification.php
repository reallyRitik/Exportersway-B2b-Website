<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage; // Import the correct class

class MembershipExpiryNotification extends Notification
{
    use Queueable;

    public $customer;

    public function __construct($customer)
    {
        $this->customer = $customer; // Assign the customer object to the class property
    }

    // Send email notification
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Membership Expiry Reminder')
            ->line('Dear ' . $this->customer->name . ',') // Use the customer name
            ->line('Your membership will expire in one month. Please renew it to continue enjoying our services.')
            ->action('Renew Membership', url('/membership/renew'));
    }

    // Send real-time (broadcast) notification
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([ // Fix the undefined class by importing it
            'title' => 'Membership Expiry',
            'body' => 'Your membership will expire in one month. Please renew your membership.',
        ]);
    }
}
