<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Junior Paiva",
            'email' => 'junior@hotmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456')
        ]);
    }
}
