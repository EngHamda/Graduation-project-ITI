<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    














DB::table('users')->insert([
'email'=>'doc@yahoo.com',
'password'=>Hash::make('12345'),
'role_id'=>4,

]);







    }
}
