<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $about = [
         'id' => '1',
            'message' => 'Emon Raj',
         
        ];
        About::create($about);
       // AdminSearch::create($page);
        // $about = new About();
        // $user->name = 'Emon Raj';
        // $user->email = 'emon@mail.com';
        // $user->password = bcrypt('12345678');
       // $user->user_picture = 'default.jpg';
       // $user->role_id = '1';
        // $user->save();

    }
}
