<?php

abstract class Product
{
    private $basisPrijs = 10;

    public function getPrijs()
    {
        return $this->basisPrijs;
    }

    abstract public function getNaam();
}

class Tablet extends Product
{
    /**
     * Tablets zijn 20% duurder
     */
    public function getPrijs()
    {
        return parent::getPrijs() * 1.20;
    }

    public function getNaam()
    {
        return "Apple iPad";
    }
}

class Laptop extends Product
{
    /**
     * laptops altijd + 100 EURO
     */
    public function getPrijs()
    {
        return parent::getPrijs() + 100;
    }

    public function getNaam()
    {
        return "HP";
    }
}

$tablet = new Tablet();
echo $tablet->getNaam();
echo "\n";
echo $tablet->getPrijs();
echo "\n";

$laptop = new Laptop();
echo $laptop->getNaam();
echo "\n";
echo $laptop->getPrijs();
echo "\n";
