<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = [
            [
             'name' => 'Goru',
             'img' => 'animal/4.jpg',
            ],
            [
                'name' => 'doyal',
                'img' => 'animal/8.jpg',
               ],
               [
                'name' => 'Tiger',
                'img' => 'animal/10.jpg',
               ],
               [
                'name' => 'sagol',
                'img' => 'animal/11.jpg',
               ],
         ];
         Animal::insert($client);
    }
}
