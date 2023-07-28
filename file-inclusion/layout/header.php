<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    // ----- Condition classique
    // if (isset($title)) {
    //   echo $title;
    // } else {
    //   echo "Mon titre par défaut";
    // }
    // ----- Opérateur ternaire
    // Condition ? valeur si vraie : valeur si fausse
    // echo isset($title) ? $title : "Mon titre par défaut";
    // ----- Opérateur null coalescent
    echo $title ?? "Mon titre par défaut";
    ?>
  </title>
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <?php require_once __DIR__ . '/navbar.php';
