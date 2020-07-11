<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\User::truncate();
        \App\User::create([
            'name' => 'Administrator',
            'username' => 'Admin',
            'password' => bcrypt('test123'),
            'status' => config('constants.STATUS.ACTIVE')
        ]);
    }
}
