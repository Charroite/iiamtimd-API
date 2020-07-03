<?php

use Illuminate\Database\Seeder;
use App\Species;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Species::insert([[
            "species" => "Fish"
        ],
        [
            "species" => "bug"
        ]
        ]);
    }
}
