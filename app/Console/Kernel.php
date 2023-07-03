<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('database:backup')->dailyAt("13:24");
        // genera una copia de seguridad completa, base de datos y archivos cada día a las 09:00
        //$schedule->command("backup:run")->dailyAt("11:44");
            
        // genera una copia de seguridad de la base de datos cada día a las 09:00
        //$schedule->command("backup:run --only-db")->dailyAt("11:44");
    
        // genera una copia de seguridad de los archivos cada día a las 09:00
        //$schedule->command("backup:run --only-files")->dailyAt("11:44");
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
