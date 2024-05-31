<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            'title' => 'Get online ',
            'user_id' => '1',
            'slug' => 'get-online',
            'tagline'=> 'I can help your business to',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt mollitia debitis ipsam laudantium maiores. Quas repellendus, 
                        dolores velit animi aperiam vero molestias necessitatibus expedita id rerum voluptate quibusdam? Voluptate doloribus, ratione non eaque dolor, 
                        voluptatibus tempore ut qui perferendis maiores libero optio sit aut voluptatem deleniti! Nostrum voluptatibus consequatur quasi?'
        ]);
    }
}
