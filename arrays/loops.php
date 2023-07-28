<?php
$users = [
  // $i = 0 :
  [
    "name" => "Sue Patterson",
    "email" => "ovacer@ficilnih.vu",
    "age" => 29,
  ],
  // 1
  [
    "name" => "Maria Zimmerman",
    "email" => "pad@pekip.la",
    "age" => 58,
  ],
  // 2
  [
    "name" => "Marvin Barber",
    "email" => "rop@ikaf.gt",
    "age" => 57,
  ],
  // 3
  [
    "name" => "Stephen Mack",
    "email" => "ipmi@ban.mc",
    "age" => 24,
  ],
  // 4
  [
    "name" => "Lewis Thornton",
    "email" => "iv@kefan.tm",
    "age" => 48,
  ],
  // 5
  [
    "name" => "Susie Casey",
    "email" => "hon@parip.la",
    "age" => 56,
  ],
  // 6
  [
    "name" => "Ivan Vaughn",
    "email" => "fo@re.gn",
    "age" => 33,
  ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Boucles</h1>

  <!-- FOREACH -->
  <h2>Foreach</h2>
  <div class="container">
    <?php foreach ($users as $user) { ?>
      <div class="card">
        <p>Nom : <?php echo $user['name']; ?></p>
        <p>Email : <?php echo $user['email']; ?></p>
        <p>Âge : <?php echo $user['age']; ?> ans</p>
      </div>
    <?php } ?>
  </div>

  <!-- WHILE -->
  <h2>While</h2>
  <div class="container">
    <?php
    $i = 0; // instruction d'initialisation
    while ($i < count($users)) { //condition de maintien 
    ?>
      <div class="card">
        <p>Nom : <?php echo $users[$i]['name']; ?></p>
        <p>Email : <?php echo $users[$i]['email']; ?></p>
        <p>Âge : <?php echo $users[$i]['age']; ?> ans</p>
      </div>
    <?php
      $i++; // instruction de pas
    } ?>
  </div>
</body>

</html>