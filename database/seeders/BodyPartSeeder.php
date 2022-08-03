<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BodyPart;

class BodyPartSeeder extends Seeder
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
             'animal_id' => '1',
             'name' => 'chok',
             'value' => '2',
            ],
            [
                'animal_id' => '1',
                'name' => 'pa',
                'value' => '4',
               ],
               [
                'animal_id' => '2',
                'name' => 'les',
                'value' => '1',
               ],



         ];
         BodyPart::insert($client);
    }
}
