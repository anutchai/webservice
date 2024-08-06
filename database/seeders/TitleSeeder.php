<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('titles')->insert([
            [
                'name' => "นาย",
                'created_at' => now(),
            ],
            [
                'name' => "นาง",
                'created_at' => now(),
            ],
            [
                'name' => "นางสาว",
                'created_at' => now(),
            ],
    ]);
    }
}
