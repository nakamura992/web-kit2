<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'オーナーアカウント',
            'email' => 'info@y-com.info',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => '代理店オーナーアカウント',
            'email' => 'agent-owner@y-com.info',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => '代理店スタッフアカウント',
            'email' => 'agent-staff@y-com.info',
            'password' => Hash::make('password'),
        ]);
    }
}
