<?php

require_once __DIR__ . '/models/Animal.php';
require_once __DIR__ . '/data/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Css -->
  <link rel="stylesheet" href="./css/style.css">
  <title>ArcaPlanet</title>
</head>

<body>
  <div class="container">
    <!-- Row Food -->
    <div class="row mb-4 d-flex justify-content-center p-3">
      <h2 class="mb-3">Food</h2>
      <?php foreach ($foods as $food) : ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $food->getImageURL(); ?>" class="card-img-top" alt="<?php echo $food->getBrand(); ?>">
            <div class="card-body">
              <h4 class="card-title"><?php echo $food->getBrand(); ?></h4>
              <p class="card-text"><strong><?php echo $food->getPrice(); ?></strong> &euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Row Toys -->
    <div class="row mb-4 p-3">
      <h2 class="mb-3">Toys</h2>
      <?php foreach ($toys as $toy) : ?>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $toy->getImageURL(); ?>" class="card-img-top img-fluid" alt="<?php echo $toy->getBrand(); ?>">
            <div class="card-body">
              <h4 class="card-title"><?php echo $toy->getBrand(); ?></h4>
              <p class="card-text"><strong><?php echo $toy->getPrice(); ?></strong> &euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Row Accessories -->
    <div class="row p-3">
      <h2 class="mb-3">Accessories</h2>
      <?php foreach ($accessories as $accessorie) : ?>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $accessorie->getImageURL(); ?>" class="card-img-top img-fluid" alt="<?php echo $accessorie->getBrand(); ?>">
            <div class="card-body">
              <h4 class="card-title"><?php echo $accessorie->getBrand(); ?></h4>
              <p class="card-text"><strong><?php echo $accessorie->getPrice(); ?></strong> &euro;</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>