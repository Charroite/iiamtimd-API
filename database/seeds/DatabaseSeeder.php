<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(MonthsSeeder::class);
        $this->call(TimeCycleSeeder::class);
        $this->call(SpeciesSeeder::class);
        $this->call(CritterSeeder::class);
        $this->call(CritterAlsoSeeder::class);
        
    }
}
