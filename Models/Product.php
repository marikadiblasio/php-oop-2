<?php 
include_once __DIR__ .'/Category.php';
/**
 * Summary of Product
 */
class Product
{
    public
    $id, $name, $category, $price, $image, $new, $brand, $detail;

    /**
     * Summary of __construct
     *
     * @param string $name
     * @param Category $category
     * @param float $price
     * @param string $image
     * @param boolean $new
     * @param string $brand
     */
    public function __construct(string $name, Category $category, float $price, string $image, bool $new, string $brand = 'none'){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->image = $image;
        $this->new = $new;
        $this->brand = $brand;
    }
    public function getDetails(){
        return $this->detail;
    }
}