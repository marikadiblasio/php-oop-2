<?php 
include_once __DIR__ . '/Product.php';
include_once __DIR__ .'/../Traits/Weightable.php';
/**
 * Summary of Food
 */
class Food extends Product
{
    use Weightable;
    public
    $diet, $kind_of_food, $age, $nutritional_value, $suggested_serving;

    /**
     * Summary of __construct
     *
     * @param string $name
     * @param Category $category
     * @param float $price
     * @param string $image
     * @param boolean $new
     * @param string $kind_of_food
     * @param string $brand
     * @param string $diet
     */
    public function __construct(string $name, Category $category, float $price, string $image, bool $new, string $age, string $kind_of_food, string $brand = 'none', string $diet = 'regular'){
        parent::__construct($name, $category, $price, $image, $new, $brand);
        $this ->age = $age;
        $this ->kind_of_food = $kind_of_food;
        $this ->diet = $diet;
    }

    /**
     * Summary of getDetails
     *
     * @return string
     */
    public function getDetails(){{
        return "Peso: {$this?->weight} Età: $this->age";
    }
}
}