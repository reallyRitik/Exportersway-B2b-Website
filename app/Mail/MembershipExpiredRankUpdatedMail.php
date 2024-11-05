<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MembershipExpiredRankUpdatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;  // Public property to pass the customer data

    /**
     * Create a new message instance.
     */
    public function __construct($customer)
    {
        $this->customer = $customer; // Assign the customer data to the class property
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your Membership Expired and Rank Updated')
                    ->view('emails.membership_expired_rank_updated');
    }
}
