<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = [
            [
                'service_name' => 'test',
            'service_description' => 'dsfasfsf',
            'service_picture' => 'service/default.jpg',
            ],
            [
                'service_name' => 'test',
            'service_description' => 'dsfasfsf',
            'service_picture' => 'service/default.jpg',
            ]
            
        ];
        Service::insert($service);
    }
}
