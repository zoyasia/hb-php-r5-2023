<?php

$entiers = [4, 7, 13];
[$one, $two, $three] = $entiers;
var_dump($one, $two, $three);
var_dump($entiers);

[,, $last] = $entiers;
var_dump($last);

[2 => $otherLast] = $entiers;
var_dump($otherLast);

$config = [
  'DB_USER' => 'test',
  'DB_HOST' => 'localhost'
];

// $user & $host
[
  'DB_USER' => $user,
  'DB_HOST' => $host
] = $config;

var_dump($user, $host);
var_dump($config);
