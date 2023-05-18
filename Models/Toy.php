<?php 
include_once __DIR__ . '/Product.php';
include_once __DIR__ .'/../Traits/Weightable.php';

class Toy extends Product
{
    use Weightable;
    public
    $dimension, $material, $color, $indoor_outdoor;
    public function __construct(string $name, $category, float $price, string $image, bool $new,$indoor_outdoor, string $brand = 'none'){
        parent::__construct($name, $category, $price, $image, $new, $brand);
        $this->indoor_outdoor = $indoor_outdoor;
    } 
    public function getDetails(){{
        return "Gioco: $this->indoor_outdoor";
    }
}
}