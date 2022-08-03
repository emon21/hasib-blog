<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About_skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = [
            [
                'skill_name' => 'PHP',
                'skill_complate' => 50,
            ],
            
            [
                'skill_name' => 'Java',
                'skill_complate' => 70,

            ]
        ];
        About_skill::insert($skill);
    }
}
