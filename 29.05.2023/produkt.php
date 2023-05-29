<?php

class Product
{

    private $m_netto;
    private $m_name;
    private $m_brutto;
    public $m_vat = 23;

    public function __construct(string $name, float $brutto)
    {
        $this->m_name = $name;
        $this->m_brutto = $brutto;
        $this->m_netto = $this->setNetto();
    }

    public function printProduct()
    {
        printf(
            "Product: %s".PHP_EOL."Cenna netto: %.2f".PHP_EOL.
            "Podatek: %.2f %%".PHP_EOL."Cena brutto: %.2f PLN",
            $this->m_name,
            $this->m_netto,
            $this->m_vat,
            $this->m_brutto
        );
    }

    private function setNetto()
    {
        return $this->m_brutto - ($this->m_brutto / (1 + $this -> m_vat));
    }

}

$fruit = new Product("Jerma", 4.85);
print $fruit->printProduct();

?>