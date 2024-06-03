<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = new Admin();
        $admin->email = 'pandiyarajaniosde@gmail.com';
        $admin->password = Hash::make('P@ndiyarajan2002'); // Replace 'password' with your desired password
        $admin->save();
    }
}