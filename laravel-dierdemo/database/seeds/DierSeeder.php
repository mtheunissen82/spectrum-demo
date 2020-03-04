<?php

use Illuminate\Database\Seeder;
use App\Dier;
use App\DierSoort;

class DierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dieren = [
            ["naam" => "hendrik", "soort" => DierSoort::where("naam", "hond")->first()],
            ["naam" => "karel", "soort" => DierSoort::where("naam", "kat")->first()],
            ["naam" => "simon", "soort" => DierSoort::where("naam", "schilpad")->first()],
            ["naam" => "pieter", "soort" => DierSoort::where("naam", "paard")->first()],
            ["naam" => "eduard", "soort" => DierSoort::where("naam", "egel")->first()],
        ];

        foreach ($dieren as $dierData) {
            $dier = new Dier();
            $dier->naam = $dierData['naam'];
            $dier->soort()->associate($dierData['soort']);
            $dier->save();
        }
    }
}
