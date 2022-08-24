<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Bootcamp::truncate(); */
        $arreglo_bootcamps = File::get("database/_data/bootcamps.json");
        json_decode($json);
        foreach($arreglo_bootcamps as $bootcamp){
            $b = new Bootcamp();
            $b->name = $bootcamp->name;
            $b->description = $bootcamp->description;
            $b->website = $bootcamp->website;
            $b->phone = $bootcamp->phone;
            $b->average_cost = $bootcamp->average_cost;
            $b->average_rating = $bootcamp->average_rating;
            $b->user_id = 1;
            $b->save();
        }
    }
}
