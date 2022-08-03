<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio_name = 'demo thids ith emon kholil arif';

        $portfolios = [
           [
            'category_id' => '1',
            'portfolio_name' => $portfolio_name,
            'slug' => Str::slug($portfolio_name),
            'portfolio_description' => '1ddddddd',
            'portfolio_picture' => 'portfolio/default.jpg',
           ],
           [
            'category_id' => '1',
            'portfolio_name' => $portfolio_name,
            'slug' => Str::slug($portfolio_name),
            'portfolio_description' => '1ddddddd',
            'portfolio_picture' => 'portfolio/default.jpg',
           ],
           [
            'category_id' => '2',
            'portfolio_name' => $portfolio_name,
            'slug' => Str::slug($portfolio_name),
            'portfolio_description' => '1ddddddd',
            'portfolio_picture' => 'portfolio/default.jpg',
           ],
           [
            'category_id' => '3',
            'portfolio_name' => $portfolio_name,
            'slug' => Str::slug($portfolio_name),
            'portfolio_description' => '1ddddddd',
            'portfolio_picture' => 'portfolio/default.jpg',
           ]
        ];
        Portfolio::insert($portfolios);
    }
}
