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
        //
        $cateSeed = [];
        for ($i = 1; $i <= 10; $i++ ){
            $cateSeed[] = [
                'name' => "Danh mục số ".$i,
                'status' => 1
            ];
        }
        DB::table('categories')->insert($cateSeed);
    }
}