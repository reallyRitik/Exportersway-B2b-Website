<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Listcustomer;
use Illuminate\Support\Facades\Mail;
use App\Notifications\MembershipExpiryNotification;
use Carbon\Carbon;

class NotifyDailyMembershipExpiry extends Command
{
    protected $signature = 'notify:membership-expiry';

    protected $description = 'Send membership expiry reminder emails to customers whose membership is expiring in a month.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {   
        // Get the customers whose membership expires in the next month
        $customers = ListCustomer::whereDate('membership_expiry', '=', Carbon::now()->addMonth()->toDateString())->get();

        foreach ($customers as $customer) {
            // Send email to the customer
            Mail::to($customer->email)->send(new \App\Mail\MembershipExpiryMail($customer));

            // Send real-time notification (e.g., using Pusher or other services)
            $customer->notify(new MembershipExpiryNotification($customer));
        }

        $this->info('Daily notifications sent for customers with upcoming membership expiries.');
    }
}