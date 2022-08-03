<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Social_Link;
class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sociallink = [
           [
            'social_name' => 'Facebook',
            'social_url' => 'www.facebook.com',
            'social_icon' => 'fa fa-facebook'
           ],
           [
            'social_name' => 'Youtube',
            'social_url' => 'www.youtube.com',
            'social_icon' => 'fa fa-youtube'
           ],
           [
            'social_name' => 'Google',
            'social_url' => 'www.google.com',
            'social_icon' => 'fa fa-google'
           ],
           [
            'social_name' => 'Linkdin',
            'social_url' => 'www.linkdin.com',
            'social_icon' => 'fa fa-linkedin'
           ]
        ];
        foreach($sociallink as $social){
            Social_Link::create($social);

        }
    }
}
