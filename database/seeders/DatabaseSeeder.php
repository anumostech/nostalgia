<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@nostalgia.ae'], // Prevent duplicate admin
            [
                'name' => 'Admin',
                'avatar' => '1772188025_user-img.png',
                'phone' => '+97122233345',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('No$t@lgia@2026'),
                'type' => 'admin',
                'status' => 'active',
            ]
        );
    }
}