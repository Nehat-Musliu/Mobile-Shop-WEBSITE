<?php
class Product {
    private $name;
    private $price;
    private $photo;

    public function __construct($name, $price, $photo) {
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
    }

    public function getName() { return $this->name; }
    public function getPrice() { return $this->price; }
    public function getPhoto() { return $this->photo; }
}
?>