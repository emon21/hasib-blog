<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = [
        //     'id' => '1',
        //     'name' => 'Emon Raj',
        //     'email' => '1',
        //     'password' => '1',
        // ];
        // $user->insert($user);

        $user = new User();
        $user->name = 'Emon Raj';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('12345678');
       // $user->user_picture = 'default.jpg';
       // $user->role_id = '1';
        $user->save();

    }
}
