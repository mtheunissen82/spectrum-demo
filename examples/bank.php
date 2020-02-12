<?php

namespace bla;

class Bank
{
    private $rekeningen;

    /**
     * @param rekeningen Array Een array met rekeningenhouder als key en saldo als value.
     */
    public function __construct($rekeningen)
    {
        $this->rekeningen = $rekeningen;
    }

    /**
     * @param van Van klant
     * @param naar Naar klant
     * @param hoeveelheid Het bedrag om over te schrijven.
     * @return True indien transactie geslaagd is en false als transactie niet geslaagd is.
     */
    public function transactie($van, $naar, $hoeveelheid)
    {
        if (array_key_exists($van, $this->rekeningen) && array_key_exists($naar, $this->rekeningen)) {
            if ($this->valideerKlant($van) === false) {
                // indien validitie van klant faalt.
                // stop transactie (breek af) en return false.
                return false;
            }

            if ($this->rekeningen[$van] >= $hoeveelheid) {
                $this->rekeningen[$van] -= $hoeveelheid;
                $this->rekeningen[$naar] += $hoeveelheid;

                return true;
            } else {
                echo "Niet voldoende saldo beschikbaar";
            }
        } else {
            echo "van of naar rekening bestaat niet";
        }

        return false;
    }

    /**
     * Valideer of klant transactie mag doen.
     */
    private function valideerKlant($naam)
    {
        if ($naam === "jan") {
            echo "Jan is geblokeerd en mag geen geld overmaken\n";
            return false;
        }

        return true;
    }
}

$bank = new Bank(["jan" => 100, "piet" => 100, "gecko" => 1000]);

if ($bank->transactie("jan", "gecko", 50)) {
    echo "transactie geslaagd";
} else {
    echo "transactie gefaald";
}
