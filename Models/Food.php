<?php 
include_once __DIR__ . '/Product.php';

class Food extends Product
{
    public
    $weight, $diet, $kind_of_food, $age, $ingredients, $nutritional_value, $suggested_serving, $type = 'Food';
    public function __construct(string $name, $category, float $price, string $image, bool $new, string $kind_of_food, string $brand = 'none', string $diet = 'regular'){
        parent::__construct($name, $category, $price, $image, $new, $brand);
        $this ->diet = $diet;
        $this ->kind_of_food = $kind_of_food;
    } 
}