<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class TestCronjob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'TestCronjob:testCronjobFunction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test cronjob feature';

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

     private function generateRandomString($length = 10) {
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $charactersLength = strlen($characters);
       $randomString = '';
       for ($i = 0; $i < $length; $i++) {
           $randomString .= $characters[rand(0, $charactersLength - 1)];
       }
       return $randomString;
     }

     public function handle() {
      $user = new User;
      $user->name = $this->generateRandomString();
      $user->email = $this->generateRandomString();
      $user->password = $this->generateRandomString();
      $user->save();
      echo "cronjob is working...";
    }
}
