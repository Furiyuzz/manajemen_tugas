<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Fairuz',
            'email' => 'fairuz@test.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Pirus',
            'email' => 'pirus@test.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Rizqi',
            'email' => 'rizqi@test.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Firuzz',
            'email' => 'firuz@test.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);
    }
}
