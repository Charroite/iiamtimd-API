<?php

use Illuminate\Database\Seeder;
Use App\TimeCycle;
class TimeCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeCycle::insert([
            [
               "time_id" => "1",
                "time" => "01:00"
            ],
            [
                "time_id" => "4",
                "time" => "04:00"
            ],
            [
                "time_id" => "8",
                "time" => "08:00"
            ],
            [
                "time_id" => "9",
                "time" => "09:00"
            ],
            [
                "time_id" => "16",
                "time" => "16:00"
            ],
            [
                "time_id" => "17",
                "time" => "17:00"
            ],
            [
                "time_id" => "19",
                "time" => "19:00"
            ],
            [
                "time_id" => "21",
                "time" => "21:00"
            ],
            [
                "time_id" => "23",
                "time" => "23:00"
            ],
            [
                "time_id" => "24",
                "time" => "24:00"
            ],
       
        ]);
    }
}
