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

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'role' => 'admin',
            'is_admin' => true,


        ]);
        // User::factory()->create([
        //     'name' => 'terentang',
        //     'email' => 'terentang@example.com',
        //     'role' => 'kecamatan',
        //     'is_admin' => false,


        // ]);
    }
}
