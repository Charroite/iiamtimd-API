<?php

use Illuminate\Database\Seeder;
use App\Critters;

class CritterAlsoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            //cherry Salson
            Critters::where('id', '27')->update([
                "month_available_also_from" => "9",
                "month_available_also_to" => "11"
            ]);
               
            //char
            Critters::where('id', '28')->update([
                "month_available_also_from" => "9",
                "month_available_also_to" => "11"
            ]);

            //Golden Trout
            Critters::where('id', '29')->update([
                "month_available_also_from" => "9",
                "month_available_also_to" => "11"
            ]);

            //Blue Marlin
            Critters::where('id', '67')->update([
                "month_available_also_from" => "7",
                "month_available_also_to" => "9"
            ]);

            //Yellow Butterfly
            Critters::where('id', '82')->update([
                "month_available_also_from" => "9",
                "month_available_also_to" => "10"
            ]);

             //Emperor Butterfly
             Critters::where('id', '89')->update([
                "month_available_also_from" => "6",
                "month_available_also_to" => "9"
            ]);

             //rajah brookes birdwing
             Critters::where('id', '92')->update([
                "month_available_also_from" => "4",
                "month_available_also_to" => "9"
            ]);

            //LadyBug
            Critters::where('id', '123')->update([
                "month_available_also_from" => "10",
                "month_available_also_to" => "10"
            ]);

         //violin Beetle
            Critters::where('name', '126')->update([
                "month_available_also_from" => "9",
                "month_available_also_to" => "11"
            ]);
    }
}
