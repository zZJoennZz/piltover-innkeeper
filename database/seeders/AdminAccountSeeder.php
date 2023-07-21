<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'admin',
            'uuid' => generateUuid(),
            'email' => 'admin@admin.com',
            'password' => env('ADMIN_INITIAL_PW') ?? 'admin',
        ]);
    }
}
