<?php
class product{
    public $name;
    public $price;
    public $description;
    function __construct(String $name, float $price, String $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}
?>