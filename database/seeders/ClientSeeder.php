<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;


class ClientSeeder extends Seeder
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
            'client_name' => 'Raj',
            'client_img' => 'default.jpg',
            'client_message' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking.',
           ],
           [
            'client_name' => 'Nil Mardana',
            'client_img' => 'default.jpg',
            'client_message' => 'It is a long established fact that a reader will be distracted by the readable
            content of a page when looking at its layout. The point of using Lorem Ipsum is that
            it has a more-or-less normal.',
           ],
           [
            'client_name' => 'Nelson Elvina',
            'client_img' => 'default.jpg',
            'client_message' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking.',
           ],
           [
            'client_name' => 'Jon Rogar',
            'client_img' => 'default.jpg',
            'client_message' => 'It is a long established fact that a reader will be distracted by the readable
            content of a page when looking at its layout. The point of using Lorem Ipsum is that
            it has a more-or-less normal.',
           ]

        ];
        Client::insert($client);
    }
}
