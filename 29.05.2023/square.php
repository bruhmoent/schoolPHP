<?php
class Square{
    private $field;
    private $perimeter;

    public function __construct($side)
    {
        $this->field = pow($side, 2);
        $this->perimeter = $side * 4;
    }

    public function getField()
    {
        return $this->field;
    }

    public function getPerimeter()
    {
        return $this->perimeter;
    }
}

$side = 12.5;
$square = new Square($side);
$field = $square->getField();
$perimeter = $square->getPerimeter();
printf("The field of a square has a side of %.2f is %2.f".PHP_EOL, $side, $field);
printf("The perimeter of a square has a side of %.2f is %2.f".PHP_EOL, $side, $perimeter);
?>