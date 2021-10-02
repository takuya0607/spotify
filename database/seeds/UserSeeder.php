<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
      [
        'username' => 'takuya0607',
        'firstName' => 'takuya',
        'lastName' => 'matsuura',
        'email' => 'test@test.com',
        'email_verified_at' => now(),
        'password' => Hash::make('11111111'),
        'signUpDate' => date('Y-m-d H:i:s'),
        'profilePic' => '',
      ],
      [
        'username' => 'laravel',
        'firstName' => 'laravel',
        'lastName' => 'laravel',
        'email' => 'laravel@laravel.com',
        'email_verified_at' => now(),
        'password' => Hash::make('22222222'),
        'signUpDate' => date('Y-m-d H:i:s'),
        'profilePic' => '',
      ]
    ]);
  }
}
