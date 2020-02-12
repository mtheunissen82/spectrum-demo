<?php

abstract class Dier
{
    private $leeftijd;

    public function __construct($leeftijd)
    {
        $this->leeftijd = $leeftijd;
    }

    public function getLeeftijd()
    {
        return $this->leeftijd;
    }

    abstract public function maakGeluid();
}

class Kat extends Dier
{
    public function maakGeluid()
    {
        return "Miaaaaaw";
    }
}

$kat = new Kat(10);
echo $kat->getLeeftijd();
echo $kat->maakGeluid();

class Hond extends Dier
{
    public function maakGeluid()
    {
        return "Woef";
    }
}

$hond = new Hond(5);
$geluidVanDeHond = $hond->maakGeluid();
echo $geluidVanDeHond;
var_dump($geluidVanDeHond);
