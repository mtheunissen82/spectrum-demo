<?php

abstract class AbstractBartenderException extends Exception
{
}
class NoMoreGlassesLeftException extends AbstractBartenderException
{
}
class NoMoreDrinksLeftException extends AbstractBartenderException
{
}

class Bartender
{
    private $glasses = 0;
    private $drinkVolumeInLiters = 2;

    /**
     * @throws Exception when serving drink fails
     * @return boolean true if drink is served false if not.
     */
    public function serveDrink()
    {
        if (!$this->doWeHaveGlasses()) {
            throw new NoMoreGlassesLeftException('No more glasses left');
        }
        
        if (!$this->doWeHaveDrinks()) {
            throw new NoMoreDrinksLeftException('No more drinks left');
        }

        return true;
    }

    private function doWeHaveGlasses()
    {
        return $this->glasses > 0;
    }

    private function doWeHaveDrinks()
    {
        return $this->drinkVolumeInLiters > 0;
    }
}

$bartender = new Bartender();

try {
    // serveDrink gooit excepties!
    $result = $bartender->serveDrink();
} catch (NoMoreDrinksLeftException $e) {
    echo "Beste klant. We hebben geen drank meer in de kelder.";
} catch (NoMoreGlassesLeftException $e) {
    echo "Sorry klant. Ik kan je drankje niet maken want we hebben geen glazen meer op voorraad.";
}
