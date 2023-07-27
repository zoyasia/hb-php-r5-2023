<?php
$products = ["Écran", "Téléphone", "Livre"];

echo $products[0];
var_dump($products);

$products[] = "Plante";

var_dump($products);

echo count($products) . " produits";
