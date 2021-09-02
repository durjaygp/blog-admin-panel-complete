<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            //Admin Value
            [
                'full_name'=>'Durjay Ghosh',
                'username'=>'Durjay',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123'),
                'role'=>'admin',
                'status'=>'active',
            ],
            //Vendor
            [
                'full_name'=>'Partho Ghosh',
                'username'=>'partho',
                'email'=>'partho@gmail.com',
                'password'=>Hash::make('1234'),
                'role'=>'vendor',
                'status'=>'active',
            ],
             //Customer
             [
                'full_name'=>'Customer Name',
                'username'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('1234'),
                'role'=>'customer',
                'status'=>'active',
            ],
        ]);
    }
}
