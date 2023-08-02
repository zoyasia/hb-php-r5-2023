<?php
require_once 'data/products.php';
require_once 'layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="stylesheet" a="assets/styles.css"></a>
    <title>Search Bar</title>
</head>
<body>
<h1>RECHERCHE</h1>

    <form action="" method="GET">
      <label for="search">Recherche</label>
      <input type="text" id="search" name="search" placeholder="Entrez votre recherche"/>
      <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php
var_dump($_GET);
if (isset($_GET['search']))
{
    ['search' => $search] = $_GET;

    $results = array_filter($products, fn ($el) => str_contains($el['name'], $search));

    if ($results === false)
    {
        echo "Aucun résultat trouvé";
    }
    else
    {
        var_dump($results);
    }
}




//    $productsNames = array_column($products, 'name');
//    $nameKey = array_search($search, $productsNames);

//    if ($nameKey === false) {
//        echo "Aucun résultat trouvé";
//    } else {
//        var_dump($products[$nameKey]);
//    }
//}

require_once 'layout/footer.php';



