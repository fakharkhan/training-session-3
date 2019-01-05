<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WishHappyBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wishes:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Wishes happy birthday to users';

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
     * @return mixed
     */
    public function handle()
    {
        //Find users having birth-date == current date
        //Found users
        // send email to the user
        //Foreach($users as $user)
        //{
        //  Mail::to($user->email)->queue(new BirthdayAlert($user));

        //}
        logger('Happy Birthday email sent');


    }
}
