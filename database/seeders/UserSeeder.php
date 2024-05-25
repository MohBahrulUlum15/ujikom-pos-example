<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                //admin
                [
                    'id' => 1,
                    'name' => 'Administrator',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('password'),
                    'phone' => '089516295079',
                    'address' => 'Mangaran - Situbondo, Jawa Timur',
                    'role' => 'admin'
                ],

                //apoteker
                [
                    'id' => 2,
                    'name' => 'Siti Aisyah',
                    'email' => 'siti.aisyah@gmail.com',
                    'password' => Hash::make('password'),
                    'phone' => '089111111111',
                    'address' => 'Jember, Jawa Timur',
                    'role' => 'apoteker'
                ],
                [
                    'id' => 3,
                    'name' => 'Nur Aini',
                    'email' => 'nur.aini@gmail.com',
                    'password' => Hash::make('password'),
                    'phone' => '089111111111',
                    'address' => 'Jember, Jawa Timur',
                    'role' => 'apoteker'
                ],
                [
                    'id' => 4,
                    'name' => 'Zahra Nur',
                    'email' => 'zahra.nur@gmail.com',
                    'password' => Hash::make('password'),
                    'phone' => '089111111111',
                    'address' => 'Jember, Jawa Timur',
                    'role' => 'apoteker'
                ],
            ]
        );
    }
}
