<?php

class Silnik
{

    private $moc;
    private $moment;
    private $paliwo;

    public function setMoc($moc)
    {
        $this->moc = $moc;
    }

    public function getMoc()
    {
        return $this->moc;
    }

}

class Auto
{

    private $silnik;

    public function __construct(private string $marka,
    private string $model,
    int|float $moc
    )
    {
        $this->silnik = new Silnik;
        $this->silnik->setMoc($moc);
    }

    public function printAuto()
    {
        print "Parametry samochodu".PHP_EOL;
        print "Marka: ".$this->marka.PHP_EOL;
        print "".$this->model.PHP_EOL;
        print "".$this->silnik->getMoc()." KM";
    }

}

$auto = new Auto("bmw", "dd", 2);
$auto->printAuto();

?>