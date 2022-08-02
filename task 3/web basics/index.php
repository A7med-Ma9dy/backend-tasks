<?php 
session_start();
require_once "products.php";


if (isset($_POST['create_post'])) {
  if (!isset($_SESSION['products'])) {
    $_SESSION ['products'] = [];
  }
  $product_count = count($_SESSION['products']);
  $_SESSION['products'][$product_count] = [
    'name' => $_POST['name'],
    'image' => $_POST['image'],
    'paragraph' => $_POST['paragraph'],
    'size' => $_POST['size'],
  ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Web Basics</title>
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="product name" />
        <input type="text" name="image" placeholder="product image" />
        <input type="text" name="paragraph" placeholder="product info" />
        <select name="size">
            <option value="xxLarge">xxLarge</option>
            <option value="large">large</option>
            <option value="xSmall">xSmall</option>
            <option value="small">small</option>
            <option value="medium">medium</option>
        </select>
        <input type="submit" value="Create Post" name="create_post" />
    </form>
  

  
      <div class="row"> 
      <?php foreach(
          array_merge($_SESSION['products'] ?? [], $products) as $index => $product): 
      ?>
          <div class="col">
              <div class="card" style="width: 18rem;">
              <img src='<?= $product['image']; ?>' class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title"><?= $product['name']; ?></h5>
                  <p class="card-text"><?= $product['paragraph'];?></p>
              </div>
              </div>
          </div>
      <?php endforeach; ?>
</div>
</body>
</html>