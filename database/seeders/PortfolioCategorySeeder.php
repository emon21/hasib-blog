<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio_Category;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfoliocategorys = [
           [
            'category_name' => 'Web Design'
           ],
           [
            'category_name' => 'Graphics Design'
           ],
           [
            'category_name' => 'Apps Development'
           ],
           [
            'category_name' => 'UI/UX Design'
           ]
        ];
        Portfolio_Category::insert($portfoliocategorys);
    }
}
