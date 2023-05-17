<?php 
include_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public
    $weight, $dimension, $material, $color, $indoor_outdoor, $type = 'Toy';
    public function __construct(string $name, $category, float $price, string $image, bool $new, string $brand = 'none'){
        parent::__construct($name, $category, $price, $image, $new, $brand);
    } 
    public function getDetails(){{
        return $this->indoor_outdoor;
    }
}
}