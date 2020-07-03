<?php

use Illuminate\Database\Seeder;
use App\Months;
class MonthsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Months::insert([[
            "month" => "Januari"
        ],
        [
            "month" => "Februari"
        ],
        [
            "month" => "March"
        ],
        [
            "month" => "April"
        ],
        [
            "month" => "May"
        ],
        [
            "month" => "June"
        ],
        [
            "month" => "July"
        ],
        [
            "month" => "August"
        ],
        [
            "month" => "September"
        ],
        [
            "month" => "October"
        ],
        [
            "month" => "November"
        ],
        [
            "month" => "December"
        ],
        ]);
    }
}
