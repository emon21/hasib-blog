<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = "title this product";
        
        $tags = [
       
           [
            
             'name' => $title,
            // 'slug' => str::slug($title),
             'slug' => Str::slug($title),
             'description' => 'emofdfsdg g fdgdfg thgfh hfn',
           ],

           [
            
             'name' => $title,
            // 'slug' => str::slug($title),
             'slug' => Str::slug($title),
             'description' => 'emofdfsdg g fdgdfg thgfh hfn',
           ],
           
        ];

        
        Tag::insert($tags);

    }
}
