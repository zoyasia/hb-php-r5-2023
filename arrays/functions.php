<?php
$clients = ["Carolyn", "Martha", "Barbara", "Marguerite", "Daniel", "Ora", "Gerald", "Adam", "Julian", "Leroy"];
$admins  = ["Michael", "Charlotte"];

$nbClients = count($clients);
echo "Nombre de clients : $nbClients";

// Créer un tableau $users contenant tous les utilisateurs ($clients & $admins)
// >= PHP 7.4
// $users = [...$clients, ...$admins];
// >= PHP 4
$users = array_merge($clients, $admins);
var_dump($users);

// Trier ce tableau par ordre alphabétique
sort($users);
var_dump($users);

// Afficher les utilisateurs dans l'ordre inverse (de Z à A)
var_dump(array_reverse($users));
