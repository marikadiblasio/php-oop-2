<?php 
//include __DIR__ . '/../Models/Product.php';
include_once __DIR__ . '/../Models/Food.php';
include_once __DIR__ . '/../Models/Toy.php';
include_once __DIR__ . '/../Models/PetBed.php';

$dog = new Category('<i class="fa-solid fa-dog"></i>', 'dog');
$cat = new Category('<i class="fa-solid fa-cat"></i>', 'cat');

$products = [
    new Product('Ciotola', $cat, 4.55, 'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwcb552b5f/idt/dmo-172131-1-172131.jpg?sw=800&sh=800', false),
    new Food('Yums', $cat, 1.99, 'https://m.media-amazon.com/images/I/815M0171I0L._AC_SY879_.jpg', true,'snack'),
    new Toy('Ball', $dog, 2.59, 'https://m.media-amazon.com/images/I/61Uh3BPhwbS._AC_SL1500_.jpg', false, 'Petup'),
    new PetBed('Diamond Sofa', $cat, 92.18, 'https://cdn.shopify.com/s/files/1/0549/1638/2879/products/FunnyFuzzy_VintageLeisureDiamondCatSofaBed6_8a988536-e442-4180-9d80-b22ea02f6d6f.jpg?v=1677236585&width=800', true)
];
$products[1]->age = 'kitten';
$products[2]->indoor_outdoor = 'indoor and outdoor';
$products[3]->color = 'white and green';
