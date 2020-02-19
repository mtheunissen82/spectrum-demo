<?php

use Illuminate\Database\Seeder;
use App\Dier;

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
            ["type" => "hond", "naam" => "hendrik"],
            ["type" => "kat", "naam" => "karel"],
            ["type" => "schilpad", "naam" => "simon"],
            ["type" => "paard", "naam" => "pieter"],
            ["type" => "egel", "naam" => "eduard"],
        ];

        foreach ($dieren as $dierData) {
            $dier = new Dier();
            $dier->type = $dierData['type'];
            $dier->naam = $dierData['naam'];
            $dier->save();
        }
    }
}
