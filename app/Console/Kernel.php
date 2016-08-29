<?php

namespace App\Console;

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
        // Commands\Inspire::class,
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

                    $studinfo = DB::table('tblaccounts')->get();

        foreach ($studinfo as $info_list):
            // print_r(); exit;
            DB::table('users')->insert([
                'name' =>  $info_list->username,
                'email' => $info_list->username .'@gmail.com',
                'studnum' => $info_list->IDnum,
                'active_stud_num' => $info_list->IDnum,
                'password' => bcrypt($info_list->password),
            ]);

        endforeach;

        })->dailyAt('02:38');

    }


}
