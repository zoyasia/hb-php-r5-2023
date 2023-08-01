<?php
require_once 'data/products.php';
require_once 'layout/header.php';
require_once 'functions/calculate.php';
const TVA_RATE = 1.2;
?>

<h1>Produits</h1>

<section class="container">
  <?php foreach ($products as $element) { ?>
    <article class="item">
      <div>
        <img src="<?php echo $element['img']; ?>" alt="<?php echo $element['name']; ?>" />
      </div>
      <div class="content">
        <h2><a href="product.php?id=<?php echo $element['id']; ?>"><?php echo $element['name']; ?></a></h2>
        <h3><?php echo getTotalPrice($element['price'], TVA_RATE); ?> €</h3>
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
