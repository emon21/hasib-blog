<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog_Category;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $blogcategory = [
           [
            'id' => '1',
            'category_name' => 'PHP',
           ],
           [
            'id' => '2',
            'category_name' => 'Laravel',
           ],
           [
            'id' => '3',
            'category_name' => 'Java',
           ],
           [
            'id' => '4',
            'category_name' => 'PYTHON',
           ]
            
           ];

           foreach ($blogcategory as $page) {
            Blog_Category::create($page);

        }
    }
}
