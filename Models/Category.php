<?php 
/**
 * Class Category
 */
class Category{
    public
    $icon, $category;
/**
 * Summary of __Construct
 *
 * @param string $icon
 * @param string $category
 */
    public function __construct(string $icon, string $category){
        $this->icon = $icon;
        $this->category = $category;
    }
}