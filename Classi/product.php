<?php
class Product{
    public $name;
    public $price;
    public $description;
    function __construct(String $name, float $price, String $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    public function applyBonus($bonus)
    {
        return $this->price - $bonus;
    }
}
?>