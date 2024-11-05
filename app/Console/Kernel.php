<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\NotifyDailyMembershipExpiry;
use App\Models\ListCustomer;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    // Register your commands here
    protected $commands = [
        NotifyDailyMembershipExpiry::class,  // Ensure this matches the correct namespace and class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $customers = \App\Models\ListCustomer::where('membership_expiry', '<=', now())
                ->where('rank', '!=', 5);
            
            // Log the count of customers matching the condition
            Log::info('Customers with expired memberships: ' . $customers->count());
        
            // Update the rank if any records match
            $updated = $customers->update(['rank' => 5]);
        
            // Log the result of the update
            Log::info('Updated rank for customers: ' . $updated);
        })->everyMinute();
        
        
    }
    

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // Load commands from the Commands directory
        $this->load(__DIR__.'/Commands');

        // Load additional routes-based commands
        require base_path('routes/console.php');
    }
}
