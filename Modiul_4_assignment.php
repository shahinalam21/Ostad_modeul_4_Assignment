<?php
class product{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

    }

    public function getFormattedPrice(){
        return number_format($this->price, 2);
    }

    public function showDetails(){
        echo "Product Details\n";
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: $".$this->getFormattedPrice() . "\n";
    }
}

$Product = new product(1, "T-Shirt", 19.99);
$Product->showDetails();

