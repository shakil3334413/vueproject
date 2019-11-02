<?php

use App\Model\Catagory;
use App\Model\Question;
use App\Model\Reply;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(User::class,10)->create();
         $this->call(Catagory::class,10)->create();
         $this->call(Question::class,10)->create();
         $this->call(Reply::class,50)->create()->each(function($reply){
             return $reply->like()->save(factory(User::class)->make());
         });
    }
}
