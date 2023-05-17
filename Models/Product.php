<?php 
include __DIR__ .'/Category.php';
/**
 * Class Product
 */
class Product
{
    public
    $id, $name, $category, $price, $image, $new, $brand, $type = 'Product';

    public function __construct(string $name, Category $category, float $price, string $image, bool $new, string $brand = 'none'){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->image = $image;
        $this->new = $new;
        $this->brand = $brand;
    }

}