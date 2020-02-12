<?php

interface Figuur
{
    public function berekenOppervlakte();
}

class Vierkant implements Figuur
{
    private $zijde;

    public function __construct($zijde)
    {
        $this->zijde = $zijde;
    }

    public function berekenOppervlakte()
    {
        return $this->zijde * $this->zijde;
    }
}

class Rechthoek implements Figuur
{
    private $lengte;
    private $breedte;

    public function __construct($lengte, $breedte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
    }

    public function berekenOppervlakte()
    {
        return $this->lengte * $this->breedte;
    }
}

$vierkant1 = new Vierkant(5);
$vierkant2 = new Vierkant(10);
$rechthoek1 = new Rechthoek(5, 15);
$rechthoek2 = new Rechthoek(10, 20);

$arr = [$vierkant1, $vierkant2, $rechthoek1, $rechthoek2, "stefan"];

function printFiguurOppervlakte(Figuur $bla)
{
    echo $bla->berekenOppervlakte();
}

foreach ($arr as $figuur) {
    printFiguurOppervlakte($figuur) . "\n";
}
