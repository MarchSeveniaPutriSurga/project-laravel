<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'title' => 'Es Doger',
            'category_id' => '2',
            'user_id' => '1',
            'slug' => 'es-doger',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        DB::table('profiles')->insert([
            'title' => 'Jus Mangga',
            'category_id' => '2',
            'user_id' => '1',
            'slug' => 'jus-mangga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        DB::table('profiles')->insert([
            'title' => 'Steak',
            'category_id' => '1',
            'user_id' => '1',
            'slug' => 'steak',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        DB::table('profiles')->insert([
            'title' => 'French Fries',
            'category_id' => '3',
            'user_id' => '1',
            'slug' => 'french-freis',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        
    }
}
