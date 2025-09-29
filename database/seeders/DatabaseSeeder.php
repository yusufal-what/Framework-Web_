<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User; // Pastikan ini di-import

class DatabaseSeeder extends Seeder


{
    public function run(): void
{
    \App\Models\User::factory()->create([
        'name' => 'Owner User',
        'email' => 'owner@example.com',
        'password' => bcrypt('password'),
        'role' => 'owner',
    ]);
}
    /**
     * Seed the application's database.
     *
     * @return void
     */
   
}
