<?php
namespace RamlitProduct;

class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProductDetails() {
        return "Product Name: " . $this->name . ", Price: $" . $this->price;
    }
}
?>
