<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     User::create([
        'donor_name'=>'Abhi',
        'email'=>'abhi636@gmail.com',
        'blood_group'=>'O+',
        'date_of_donation'=>'1999-07-23',
        'quantity'=>'2',
        'password'=>'admins',

     ]);
    }
}
