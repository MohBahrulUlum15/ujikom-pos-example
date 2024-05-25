<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supliers')->insert(
            [
                [
                    'id'  => 1,
                    'nama' => 'Suplier 1',
                    'alamat' => 'Mangaran',
                    'kota' => 'Situbondo',
                    'telepon' => '08951621939',
                ],
                [
                    'id'  => 2,
                    'nama' => 'Suplier 2',
                    'alamat' => 'Mangaran',
                    'kota' => 'Jember',
                    'telepon' => '08951621589',
                ],
                [
                    'id'  => 3,
                    'nama' => 'Suplier 3',
                    'alamat' => 'Mangaran',
                    'kota' => 'Bondowoso',
                    'telepon' => '08951621589',
                ]
            ]
        );
    }
}
