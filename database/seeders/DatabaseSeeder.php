<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin Hero',
            'email' => 'admin@heroacademy.id',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Teacher Dummy
        User::create([
            'name' => 'Guru Budi',
            'email' => 'guru@heroacademy.id',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);

        // Student Dummy
        User::create([
            'name' => 'Siswa Ani',
            'email' => 'ani@heroacademy.id',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
    }
}
