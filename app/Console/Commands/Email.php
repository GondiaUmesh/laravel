<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

use Mail;
use Illuminate\Support\Facades\DB;

class Email extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email in every 15 days';

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
 
       $user = User::all();
 
       foreach ($user as $a)
 
       {
 
 
 
   Mail::raw("This is automatically generated everyMinute Update", function($message) use ($a)
 
   {
 
       $message->from('gondiaumesh007@gmail.com');
 
       $message->to($a->email)->subject('everyMinute Update');
 
   });
 
   }
 
 
 
   $this->info('everyMinute Update has been send successfully');
 
   }
}
