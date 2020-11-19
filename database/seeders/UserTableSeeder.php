<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Joseph Yhu',
            'email' => 'xbhlx7@gmail.com',
            'password' => 'VqrYKUGmC4c3&wo@*I$f'
        ]);
    }
}
