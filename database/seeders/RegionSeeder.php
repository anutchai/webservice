<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('regions')->insert([
            [
                'name' => 'ภาคกลาง',
                'created_at' => now(),
                'country_id' => '1'
            ],
            [
                'name' => 'ภาคตะวันออกเฉียงเหนือ',
                'created_at' => now(),
                'country_id' => '1'
            ],
            [
                'name' => 'เวียดนามเหนือ',
                'created_at' => now(),
                'country_id' => '3'
            ],
        ]);
    }
}
