<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Listcustomer;
use Illuminate\Support\Facades\Mail;

class UpdateCustomerRankAfterExpiry extends Command
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
        $customers = Listcustomer::where('membership_expiry', '<', Carbon::now()->toDateString())
                             ->where('rank', '!=', 5) // Only update if rank is not already 5
                             ->get();
    
        foreach ($customers as $customer) {
            // Update rank
            $customer->rank = 5;
            $customer->save();
    
            // Optional: Send an email or notification about the rank change
            Mail::to($customer->email)->send(new \App\Mail\MembershipExpiredRankUpdatedMail($customer));
        }
    
        $this->info('Updated ranks for expired memberships.');
    }
    
}
