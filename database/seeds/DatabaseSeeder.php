<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Lesson;
use App\User;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */
public function run()
{
    //Lesson::truncate();

    Model::unguard();

    $this->call("UserTableSeeder");


}

}

class UserTableSeeder extends Seeder
{
 public function run()
 {
  DB::table('user')->delete();
  User::create(array(    
   'email'    => 'admin@gmail.com',   
   'password' => 'awesome',
   'role'     => 'admin'
  ));
 }
}