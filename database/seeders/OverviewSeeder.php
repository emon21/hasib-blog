<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Overview;

class OverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $overview = new Overview();
        $overview->project_complate = '1022';
        $overview->happy_clients = '860';
        $overview->cups_of_tea = '530';
        $overview->winning_awards = '52';
        $overview->save();

    }
}
