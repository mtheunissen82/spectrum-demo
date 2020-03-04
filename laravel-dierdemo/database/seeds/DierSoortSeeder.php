<?php

use Illuminate\Database\Seeder;
use App\DierSoort;

class DierSoortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dierSoorten = [
            "kat",
            "hond",
            "schilpad",
            "paard",
            "egel"
        ];

        foreach ($dierSoorten as $soort) {
            $dierSoort = new DierSoort();
            $dierSoort->naam = $soort;
            $dierSoort->save();
        }
    }
}
