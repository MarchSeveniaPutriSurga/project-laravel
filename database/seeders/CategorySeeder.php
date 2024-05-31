<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        DB::table('categories')->insert([
            'name' => 'Drink',
            'slug' => 'drink'
        ]);
        DB::table('categories')->insert([
            'name' => 'Snack',
            'slug' => 'snack'
        ]);
        DB::table('categories')->insert([
            'name' => 'Dessert',
            'slug' => 'dessert'
        ]);
    }
}
