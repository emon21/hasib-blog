<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
           [
            'menu_name' => 'home',
            'menu_url' => '#home',
           ],
           [
            'menu_name' => 'About',
            'menu_url' => '#about',
           ],
           [
            'menu_name' => 'Blog',
            'menu_url' => '#blog',
           ],
           [
            'menu_name' => 'Protfolio',
            'menu_url' => '#Protfolio',
           ]
        ];
        Menu::insert($menus);
    }
}
