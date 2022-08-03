<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_name = 'blog title here';
        $blog = [
            [
            'cat_id' => '1',
             'blog_name' => $blog_name,
             'slug' => Str::slug($blog_name),
             'blog_message' => 'this test file',
             'user_name' => 'emon',
             'blog_picture' => 'blog/default.jpg',
            ],
            [

                'cat_id' => '1',
                'blog_name' => $blog_name,
                'slug' => Str::slug($blog_name),
                'blog_message' => 'this test file',
                'user_name' => 'emon',
                'blog_picture' => 'blog/default.jpg',
               ],
               [
                'cat_id' => '4',
                'blog_name' => $blog_name,
                'slug' => Str::slug($blog_name),
                'blog_message' => 'this test file',
                'user_name' => 'emon',
                'blog_picture' => 'blog/default.jpg',
               ],
               [
                'cat_id' => '2',
                
                'blog_name' => $blog_name,
                'slug' => Str::slug($blog_name),
                'blog_message' => 'this test file',
                'user_name' => 'emon',
                'blog_picture' => 'blog/default.jpg',
               ],
             
            ];

            foreach($blog as $list){
            Blog::create($list);

            }

    }
}
