<?php 
include_once __DIR__ . '/Product.php';

class PetBed extends Product
{
    public
    $dimension, $material, $color, $indoor_outdoor;
    public function __construct(string $name, $category, float $price, string $image, bool $new, string $color,string $brand = 'none'){
        parent::__construct($name, $category, $price, $image, $new, $brand);
        $this->color = $color;
    }
    public function getDetails(){{
        return "Color: $this->color";
    }
}
}