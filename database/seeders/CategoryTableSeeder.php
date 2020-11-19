<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'C#'
        ]);
        DB::table('categories')->insert([
            'name' => 'Computer Science'
        ]);
        DB::table('categories')->insert([
            'name' => 'CSS'
        ]);
        DB::table('categories')->insert([
            'name' => 'Databases'
        ]);
        DB::table('categories')->insert([
            'name' => 'Development Tools'
        ]);
        DB::table('categories')->insert([
            'name' => 'HTML'
        ]);
        DB::table('categories')->insert([
            'name' => 'Java'
        ]);
        DB::table('categories')->insert([
            'name' => 'JavaScript'
        ]);
        DB::table('categories')->insert([
            'name' => 'PHP'
        ]);
        DB::table('categories')->insert([
            'name' => 'Python'
        ]);
        DB::table('categories')->insert([
            'name' => 'Ruby'
        ]);
        DB::table('categories')->insert([
            'name' => 'Security'
        ]);
    }
}
