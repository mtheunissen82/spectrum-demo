<?php

class Person
{
    private $firstName;
    private $lastName;
    public $bornAt;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

        // Set timestamp at the time this person is constructed / "born" .
        $this->bornAt = time();
        
        $this->printConstructionMessage();
    }

    /**
     * Print construction message for learning purposes
     */
    private function printConstructionMessage() {
        echo "Object constructed with firstName: \"$this->firstName\" and lastName \"$this->lastName\" \n";
    }

    public function getFullName()
    {
        // concat first and lastname
        return $this->firstName . " " . $this->lastName;
    }

    public function getAgeInSeconds()
    {
        return time() - $this->bornAt;
    }
}

$marc = new Person("Marc", "Theunissen");
echo "Fullname: " . $marc->getFullName() . "\n";
echo "Age in seconds: " . $marc->getAgeInSeconds() . "\n\n";

$frits = new Person("Frits", "van de Berg");
echo "Fullname: " . $frits->getFullName() . "\n";
echo "Age in seconds: " . $frits->getAgeInSeconds() . "\n\n";

$jan = new Person("Jan", "Jansen");
echo "Fullname: " . $jan->getFullName() . "\n";
echo "Age in seconds: " . $jan->getAgeInSeconds() . "\n\n";

$piet = new Person("Piet", "Vermeer");
echo "Fullname: " . $piet->getFullName() . "\n";
echo "Age in seconds: " . $piet->getAgeInSeconds() . "\n\n";
