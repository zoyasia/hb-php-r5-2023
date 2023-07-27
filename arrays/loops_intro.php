<?php
// instruction d'initialisation, condition de maintien, instruction de pas
//         0,  1, 2,  3,  4,  5,  6,  7,...
$notes = [14, 15, 4, 12, 11, 18, 19, 20, 2];

// WHILE
echo "<h2>WHILE</h2>";

// Afficher toutes les notes
// Boucler du début à la fin du tableau
// Début du tableau : indice/clé 0
$i = 0; // instruction d'initialisation

while ($i < count($notes)) { // condition de maintien
  echo $notes[$i] . "<br />";
  $i++; // instruction de pas
}

// FOR
echo "<h2>FOR</h2>";

for ($i = 0; $i < count($notes); $i++) {
  echo $notes[$i] . "<br />";
}

// DO...WHILE
echo "<h2>DO...WHILE</h2>";

$i = 0;

do {
  echo $notes[$i] . "<br />";
  $i++;
} while ($i < count($notes));

// FOREACH