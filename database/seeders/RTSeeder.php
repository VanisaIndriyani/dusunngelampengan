<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rtData = [
            [
                'name' => 'Ketua RT 001',
                'email' => 'rt001@nglampengan.com',
                'password' => Hash::make('rt001123'),
                'role' => 'rt',
                'rt_number' => '001',
                'phone' => '081234567890',
                'address' => 'RT 001, Desa Nglampengan, Kapanewon Dlingo',
                'is_active' => true,
            ],
            [
                'name' => 'Ketua RT 002',
                'email' => 'rt002@nglampengan.com',
                'password' => Hash::make('rt002123'),
                'role' => 'rt',
                'rt_number' => '002',
                'phone' => '081234567891',
                'address' => 'RT 002, Desa Nglampengan, Kapanewon Dlingo',
                'is_active' => true,
            ],
            [
                'name' => 'Ketua RT 003',
                'email' => 'rt003@nglampengan.com',
                'password' => Hash::make('rt003123'),
                'role' => 'rt',
                'rt_number' => '003',
                'phone' => '081234567892',
                'address' => 'RT 003, Desa Nglampengan, Kapanewon Dlingo',
                'is_active' => true,
            ],
            [
                'name' => 'Ketua RT 004',
                'email' => 'rt004@nglampengan.com',
                'password' => Hash::make('rt004123'),
                'role' => 'rt',
                'rt_number' => '004',
                'phone' => '081234567893',
                'address' => 'RT 004, Desa Nglampengan, Kapanewon Dlingo',
                'is_active' => true,
            ],
            [
                'name' => 'Ketua RT 005',
                'email' => 'rt005@nglampengan.com',
                'password' => Hash::make('rt005123'),
                'role' => 'rt',
                'rt_number' => '005',
                'phone' => '081234567894',
                'address' => 'RT 005, Desa Nglampengan, Kapanewon Dlingo',
                'is_active' => true,
            ],
        ];

        foreach ($rtData as $rt) {
            User::updateOrCreate(
                ['email' => $rt['email']],
                $rt
            );
        }

        $this->command->info('RT accounts created successfully!');
        $this->command->info('RT 001: rt001@nglampengan.com / rt001123');
        $this->command->info('RT 002: rt002@nglampengan.com / rt002123');
        $this->command->info('RT 003: rt003@nglampengan.com / rt003123');
        $this->command->info('RT 004: rt004@nglampengan.com / rt004123');
        $this->command->info('RT 005: rt005@nglampengan.com / rt005123');
    }
}
