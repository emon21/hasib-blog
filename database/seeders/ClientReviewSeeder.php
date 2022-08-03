<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client_review;
class ClientReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientReview = [
            [
                'user_name' => 'Nil Mardana',
                'message' => 'It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a more-or-less normal.',
                'user_picture' => 'clientreview/default.jpg',
            ],
            [
                'user_name' => 'Nelson Elvina',
                'message' => 'It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a more-or-less normal.',
                'user_picture' => 'clientreview/default.jpg',
            ],
            [
                'user_name' => 'Jon Rogar',
                'message' => 'It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a more-or-less normal.',
                'user_picture' => 'clientreview/default.jpg',
            ],
            [
                'user_name' => 'Raj Ear',
                'message' => 'It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a more-or-less normal.',
                'user_picture' => 'clientreview/default.jpg',
            ]
        ];
        Client_review::insert($clientReview);
    }
}
