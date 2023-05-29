<?php

class Person
{
    private $name;

    function __construct(string $n){$this->name = $n;}

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

$contact = new Person("bigs");
print $contact->getName();
?>