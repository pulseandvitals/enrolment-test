<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Aeron test',
            'email' => 'aeron@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin'
        ]);
    }
}
