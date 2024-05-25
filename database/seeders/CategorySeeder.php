<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Hot Drink',
                'description' => 'Kategori minuman panas'
            ],
            [
                'id' => 2,
                'name' => 'Cold Drink',
                'description' => 'Kategori minuman panas'
            ],
            [
                'id' => 3,
                'name' => 'Food',
                'description' => 'Kategori makanan'
            ],
        ]);
    }
}
