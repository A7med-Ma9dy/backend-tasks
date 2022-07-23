<?php
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST) {
  if (empty($_POST['name']) || empty($_POST['var'])) {
    $error = "<div class = 'alert alert-danger'>Please Fill out All Inputs</div>";
  }
}

$total = 0;

function delivery($city)
{
  $delivery = 0;
  switch ($city) {
    case $city == 'Cairo':
      $delivery = 0;
      break;
    case $city == 'Giza':
      $delivery = 30;
      break;
    case $city == 'Alex':
      $delivery = 50;
      break;
    case $city ==  'Other':
      $delivery = 100;
      break;
    default:
      $delivery = 0;
  }
  return $delivery;
}


function disc($total)
{
  $discount = 0;
  switch ($total) {
    case $total < 1000:
      $discount = 0;
      break;
    case $total >= 1000 && $total < 3000:
      $discount = .10;
      break;
    case $total >= 3000 && $total < 4500:
      $discount = .15;
      break;
    case $total >= 4500:
      $discount = .2;
      break;
    default:
      $discount = 0;
  }
  return ($total * $discount);
}


?>
<!doctype html>
<html lang="en">

<head>
  <title>Supermarket</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: #cdd1d3;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <h1 class="h1 text-light text-center display-3 mt-3 font-weight-bold">Supermarket</h1>
        <img src="supermarket.gif" class="img-fluid" alt="supermarket image">
      </div>
      <div class="col-5 mt-5">
        <form method="post">
          <?= $error ?? "" ?>
          <label for="name" class="form-label font-weight-bold">User Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $_POST['name'] ?? "" ?>">
          <div class="form-group">
            <label for="city" class="form-label font-weight-bold">City</label>
            <select class="form-control" name="city">
              <option value="Cairo" <?= (isset($_POST['city']) && $_POST['city'] == 'Cairo') ? 'selected' : "" ?>>Cairo</option>
              <option value="Giza" <?= (isset($_POST['city']) && $_POST['city'] == 'Giza') ? 'selected' : "" ?>>Giza</option>
              <option value="Alex" <?= (isset($_POST['city']) && $_POST['city'] == '"Alex') ? 'selected' : "" ?>>Alex</option>
              <option value="Other" <?= (isset($_POST['city']) && $_POST['city'] == 'Other') ? 'selected' : "" ?>>Other</option>
            </select>
          </div>
          <label for="var" class="form-label font-weight-bold">Variations</label>
          <input type="number" name="var" class="form-control" placeholder="Number" value="<?= $_POST['var'] ?? "" ?>">
          <button type="submit" class="btn btn-secondary text-center font-weight-bold my-4 offset-5">Enter</button>

          <?php if (!empty($_POST['var']) && !empty($_POST['name']) && !empty($_POST['city'])) { ?>
            <div class="container">
              <div class="row font-weight-bold">
                <span class="col">Product name</span>
                <span class="col">Price</span>
                <span class="col">Quantity</span>
                <?php if (!empty($_POST['price-1']) && !empty($_POST['quan-1'])) {
                  echo "<span class='col'>Sub Total</span>";
                } ?>

              </div>

              <?php for ($i = 0; $i < $_POST['var']; $i++) { ?>
                <div class="row">
                  <input type="text" class="col form-control mx-2 w-25" name="product-<?= $i + 1 ?>" placeholder="Product name" value="<?= $_POST['product-' . $i + 1] ?? "" ?>" <?= !empty($_POST['product-' . $i + 1]) ? "disabled" : "" ?> required>
                  <input type="number" class="col form-control mx-2 w-25" name="price-<?= $i + 1 ?>" placeholder="Price" value="<?= $_POST['price-' . $i + 1] ?? "" ?>" <?= !empty($_POST['price-' . $i + 1]) ? "disabled" : "" ?> required>
                  <input type="number" class="col form-control mx-2 w-25" name="quan-<?= $i + 1 ?>" placeholder="Quantity" value="<?= $_POST['quan-' . $i + 1] ?? "" ?>" <?= !empty($_POST['quan-' . $i + 1]) ? "disabled" : "" ?> required>

                  <?php if (!empty($_POST['price-' . $i + 1]) && !empty($_POST['quan-' . $i + 1])) {
                    $subtotal = $_POST['price-' . $i + 1] * $_POST['quan-' . $i + 1];
                    $total += $subtotal;
                    echo "<span class='col form-control mx-2 w-25 bg-secondary text-light'>$subtotal</span>";
                  } ?>
                </div>
              <?php }
              if (empty($total)) {
                echo "<button type='submit' class='btn btn-secondary text-center font-weight-bold my-4 offset-5'>Receipt</button>";
              } ?>
            </div>
          <?php } ?>
        </form>
        <?php if (!empty($total)) { ?>
          <table class="table table-stripped table-bordered text-center mt-5">
            <tr>
              <th>Client Name</th>
              <td><?= $_POST['name'] ?? "" ?></td>
            </tr>
            <tr>
              <th>City</th>
              <td><?= $_POST['city'] ?? "" ?></td>
            </tr>
            <tr>
              <th>Total</th>
              <td><?= $total ?? "" ?> EGP</td>
            </tr>
            <tr>
              <th>Discount</th>
              <td><?= disc($total) ?? "" ?> EGP</td>
            </tr>
            <tr>
              <th>Total After Discount</th>
              <td><?= ($total - disc($total)) ?? "" ?> EGP</td>
            </tr>
            <tr>
              <th>Delivery</th>
              <td><?= delivery($_POST['city']) ?? "" ?> EGP</td>
            </tr>
            <tr>
              <th class="lead text-success font-weight-bold">Net Total</th>
              <td class="lead text-success font-weight-bold"><?= ($total - disc($total) + delivery($_POST['city'])) ?? "" ?> EGP</td>
            </tr>
          </table>

        <?php } ?>

      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>