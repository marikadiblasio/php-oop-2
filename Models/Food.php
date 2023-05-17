<?php 
include __DIR__ . '/Product.php';

class Food extends Product
{
    public
    $weight, $diet, $kind_of_food, $age, $ingredients, $nutritional_value, $suggested_serving;
    public function __construct(string $kind_of_food, string $diet = 'regular'){
        //parent::__construct($name,$category, $price, $image, $new, $brand = 'none');
        $this ->diet = $diet;
        $this ->kind_of_food = $kind_of_food;
    } 
}

$cip = new Food('snack');
var_dump($cip);