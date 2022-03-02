<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

            // Admin
            [
                'full_name' =>'Bhavdeep Bharadwaj',
                'username'  =>'Admin',
                'email'     =>'admin@gmail.com',
                'password'  =>Hash::make('Admin@123'),
                'role'      =>'admin',
                'status'    =>'active',
            ],

            // Vender
            [
                'full_name' =>'Bhavdeep Bharadwaj',
                'username'  =>'Vender',
                'email'     =>'vender@gmail.com',
                'password'  =>Hash::make('Vender@123'),
                'role'      =>'vender',
                'status'    =>'active',
            ],

            // Customer
            [
                'full_name' =>'Bhavdeep Bharadwaj',
                'username'  =>'Customer',
                'email'     =>'customer@gmail.com',
                'password'  =>Hash::make('Customer@123'),
                'role'      =>'customer',
                'status'    =>'active',
            ],
        ]);
    }
}
