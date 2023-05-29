<?php

class Car
{
    private $model;
    private $year;
    private $registry;

    function __construct(string $m, int $y, string $r){
        $this->model = $m;
        $this->year = $y;
        $this->registry = $r;
    }

    public function setModel(string $m)
    {
        $this->model = $m;
    }

    public function setYear(int $y)
    {
        $this->year = $y;
    }

    public function setRegistry(string $r)
    {
        $this->registry = $r;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getRegistry()
    {
        return $this->registry;
    }
}

$car = new Car("audi", 1984, "AF@KD");
print $car->getModel().", ".$car->getYear().", ".$car->getRegistry()
?>