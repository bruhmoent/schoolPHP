<?php
class Animal
{

    private $eyeColor;

    public function setEyeColor(string $eC)
    {
        $this->eyeColor = $eC;
    }

    public function getEyeColor()
    {
        return $this->eyeColor;
    }

}

class Dog extends Animal
{

    private $race;

    public function setRace(string $race)
    {
        $this->race = $race;
    }

    public function getRace()
    {
        return $this->race;
    }

}

$dog = new Dog();
$dog -> setRace("jerma");
$dog -> setEyeColor("bruger");
print $dog->getRace().", ".$dog->getEyeColor();
?>