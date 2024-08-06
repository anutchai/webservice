<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            [
                'name' => 'กรุงเทพมหานคร',
                'created_at' => now(),
                'region_id' => '1'
            ],
            [
                'name' => 'นนทบุรี',
                'created_at' => now(),
                'region_id' => '1'
            ],
            [
                'name' => 'สุรินทร์',
                'created_at' => now(),
                'region_id' => '2'
            ],
        ]);
    }
}
