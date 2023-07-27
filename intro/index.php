<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coucou</title>
</head>

<body>
  <h1><?php echo "Coucou"; ?></h1>
  <?php
  const SOFTWARE_VERSION = "1.0.0";
  $age = 45;
  $name = "Bobby";

  echo 'Bonjour $name, vous avez $age ans<br />';
  echo "Bonjour $name, vous avez $age ans";

  var_dump($age);
  var_dump($name);
  ?>
</body>

</html>