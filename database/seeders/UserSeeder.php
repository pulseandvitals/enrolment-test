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
            'name' => 'Aeron Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'has_scholarship' => 1,
            'gpa_average' => 100,
            'role' => 'Admin'
        ]);
        User::create([
            'name' => 'Student 1',
            'email' => 'student1@gmail.com',
            'password' => Hash::make('12345678'),
            'has_scholarship' => 0,
            'gpa_average' => 75,
            'role' => 'Student'
        ]);
        User::create([
            'name' => 'Student 2',
            'email' => 'student2@gmail.com',
            'password' => Hash::make('12345678'),
            'has_scholarship' => 1,
            'gpa_average' => 90,
            'role' => 'Student'
        ]);
    }
}
