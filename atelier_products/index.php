<?php
require_once 'data/products.php';
require_once 'layout/header.php';
?>

<h1>Produits</h1>

<section class="container">
  <?php foreach ($products as $element) { ?>
    <article class="item">
      <div>
        <img src="<?php echo $element['img']; ?>" alt="<?php echo $element['name']; ?>" />
      </div>
      <div class="content">
        <h2><?php echo $element['name']; ?></h2>
        <h3><?php echo $element['price']; ?> €</h3>
        <div class="tags">
          <?php foreach ($element['tags'] as $tagIndex) { ?>
            <div class="tag" style="background-color: <?php echo $tags[$tagIndex]['color']; ?>">
              <?php echo $tags[$tagIndex]['name']; ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </article>
  <?php } ?>
</section>

<?php require_once 'layout/footer.php';
