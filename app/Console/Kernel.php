<?php

namespace stbenilde\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
         Commands\Inspire::class,
         Commands\LogDemo::class,
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

            DB::table('users')->insert([
                'name' =>  'test',
                'email' => 'test1@gmail.com',
                'studnum' => '234',
                'active_stud_num' => '234',
                'password' => bcrypt('234'),
            ]);

        })->dailyAt('08:10');

    }


}
