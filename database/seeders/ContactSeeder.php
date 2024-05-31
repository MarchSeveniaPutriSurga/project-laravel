<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'Putri',
            'user_id' => '1',
            'email' => 'putri@gmail.com',
            'phonenumber' => '088888888',
        ]);
    }
}
