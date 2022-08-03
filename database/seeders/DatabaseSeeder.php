<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\factory;

// use App\Models\User;
use Database\Seeders\AboutSeeder;
use Database\Seeders\BlogCategorySeeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\PortfolioCategorySeeder;
use Database\Seeders\PortfolioSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AboutSeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            MenuSeeder::class,
            PortfolioCategorySeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            OverviewSeeder::class,
            ClientSeeder::class,
            ClientReviewSeeder::class,
            SocialLinkSeeder::class,
            AnimalSeeder::class,
            BodyPartSeeder::class,
        ]);
        // \App\Models\Portfolio::factory(10)->create();

    }
}
