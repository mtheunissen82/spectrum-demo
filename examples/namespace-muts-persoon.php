<?php

namespace SpectrumATeam\MutsenDemo;

class Muts
{
    public function __construct($naam)
    {
        $this->naam = $naam;
    }

    public function print()
    {
        echo "$this->naam is echt een muts!\n";
    }
}
