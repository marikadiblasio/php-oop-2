<?php 
include __DIR__ . '/../Models/Product.php';

$dog = new Category('<i class="fa-solid fa-dog"></i>', 'dog');
$cat = new Category('<i class="fa-solid fa-cat"></i>', 'cat');

$products = [
    new Product('Ciotola', $cat, 4.55, 'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwcb552b5f/idt/dmo-172131-1-172131.jpg?sw=800&sh=800', false)
];
var_dump($products);