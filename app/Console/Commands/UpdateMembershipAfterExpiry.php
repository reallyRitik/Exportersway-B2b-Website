<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Listcustomer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class UpdateMembershipAfterExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
{
    // Fetch customers whose membership expired today
    $customers = ListCustomer::whereDate('membership_expiry', '<', Carbon::now()->toDateString())->get();

    foreach ($customers as $customer) {
        // Update membership expiry (e.g., extend by 1 year or set it to null)
        $customer->membership_expiry = Carbon::now()->addYear(); // Assuming you extend it for another year
        $customer->rank = 5; // Set rank to 5 after expiry
        $customer->save();

        // Send notification of membership expiry
        Mail::to($customer->email)->send(new \App\Mail\MembershipExpiredRankUpdatedMail($customer));
    }

    $this->info('Updated membership expiry and rank for expired customers.');
}

}
