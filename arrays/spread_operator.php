<?php

$tab1 = [1, 2, 3];
$tab2 = [4, 5, 6];

// Ici, je crée un nouveau tableau
// À l'index 0, j'aurai un tableau : $tab1
// À l'index 1, j'aurai un tableau : $tab2
$tab3 = [$tab1, $tab2];

// Ici, avec le spread operator,
// j'éclate les éléments des tableaux
// au sein d'un nouveau
$tab3 = [...$tab1, ...$tab2];
var_dump($tab3);

$array = [1, 2, 6 => 8];
var_dump($array);

$newArray = [...$array];
var_dump($newArray);
var_dump($array);

$newArray[] = 10;
var_dump($newArray);

$evenNewArray = [...$newArray, 15];
var_dump($evenNewArray);
