<?php

require "namespace-muts-persoon.php";

class Muts
{
    private $materiaal;

    public function __construct($materiaal)
    {
        $this->materiaal = $materiaal;
    }

    public function getInfo()
    {
        echo "Een muts gemaakt van $this->materiaal om op je hoofd te zetten\n";
    }
}

$muts = new Muts("latex");
$muts->getInfo();

$mutsPersoon = new \SpectrumDemo\MutsenDemo\Muts("Marc");
$mutsPersoon->print();
