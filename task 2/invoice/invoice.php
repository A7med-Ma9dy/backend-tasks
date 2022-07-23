<?php
/*  Name : ahmed
    Phone : 01205678912
    Product: Laptop
    City:   Alex
    Delivery Tax : 50 EGP
    Price: 15000 EGP
    VAT:14%
    VAT Price:2100 EGP
    Price After VAT: 17100 EGP
    Discount:20%
    Discount Value:3420 EGP
    Price After Discount:13680 EGP
    Total Price:13730 EGP
*/

define('VAT', 0.14);
if ($_SERVER['REQUEST_METHOD'] == "GET") {
  echo "<h1> Error 405 Method Not Allowed </h1>";
  die; // exit file
}
// if (empty($_POST['city']) && empty($_POST['products'])) {
//   echo "<h1>Error City and at least one Product is Required</h1>";
//   die;
// }
// if (empty($_POST['city'])) {
//   echo "<h1>Error City is Required</h1>";
//   die;
// }
if (empty($_POST['products'])) {
  echo "<h1>Error At least one Product is Required</h1>";
  die;
}
if (empty($_POST['phone'])) {
  echo "<h1>Error Number is Required</h1>";
  die;
}
$delivery = ['Cairo' => 0, 'Alex' => 50, 'Aswan' => 200];
$prices = ['Laptop' => 15000, 'Mobile' => 12000, 'Tv' => 10000, 'Tshirt' => 300, 'Watch' => 500];
$discounts = ['Laptop' => 0.2, 'Mobile' => 0.1, 'Tv' => 0.05, 'Tshirt' => 0, 'Watch' => 0.25];
$more = count($_POST['products']) > 1;

// $vatPrice = $price * VAT;
// $PriceAfterVAT = $price + $vatPrice;
// $DiscountValue = $discount * $PriceAfterVAT;
// $PriceAfterDiscount= $PriceAfterVAT - $DiscountValue;
// $TotalPrice = $PriceAfterDiscount + $delivery;

?>
<!doctype html>
<html lang="en">

<head>
  <title>Invoice</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-light font-weight-bold">
  <div class="container">
    <div class="row">
      <div class="col-4 offset-4 text-center bg-warning font-weight-bold mt-5">
        <h4 class="h4">Your Invoice</h4>
      </div>
      <div class="col-4 offset-4 mt-3 bg-white">
        <ul>
          <li>Name: <b><?= $_POST['name'] ?></b></li>
          <li>Number: <b><?= $_POST['phone'] ?></b></li>
          <li>City: <b><?= $_POST['city'] ?></b></li>

          <li>Products:
            <?php foreach ($_POST['products'] as $value) {
              echo ($more) ? "<ul><li><b>$value</b></li></ul>" : "<b>$value</b>";
            } ?>
          </li>

          <li>Delivery Tax: <b><?= $delivery[$_POST['city']] ?> EGP</b></li>

          <li>Price: <?php $cost = 0;
                      if (count($_POST['products']) > 1) {
                        echo "<ul>";
                        foreach ($_POST['products'] as $value) {
                          echo "<li>$value: $prices[$value] EGP</li>";
                          $cost += $prices[$value];
                        }
                        echo "<li>Total:<b> $cost EGP</b></li></ul>";
                      } else {
                        echo "<b> {$prices[$_POST['products'][0]]} EGP</b>";
                        $cost += $prices[$_POST['products'][0]];
                      } ?></li>

          <li>VAT: <b><?= VAT * 100 ?>%</b></li>

          <li>VAT Price: <b><?= $vatPrice = ($cost * VAT); ?> EGP</b></li>

          <li>Prices After VAT: <b><?= ($cost + $vatPrice); ?></b></li>

          <li>Discount: <?php foreach ($_POST['products'] as $v) {
                          echo ($more) ? "<ul><li>$v: " . ($discounts[$v] * 100) . " %</li></ul>" : '<b>' . ($discounts[$v] * 100) . ' %</b>';
                        } ?></li>

          <li>Discount Value: <?php foreach ($_POST['products'] as $v) {
                                echo ($more) ? "<ul><li>$v: " . ($discounts[$v] * $prices[$v] * (1 + VAT)) . " EGP</li></ul>" : '<b>' . ($discounts[$v] * $prices[$v] * (1 + VAT)) . ' EGP</b>';
                              } ?></li>

          <li>Prices After Discount: <?php
                                      $total = 0;
                                      $PriceAfterDiscount = 0;
                                      if (count($_POST['products']) > 1) {
                                        echo "<ul>";
                                        foreach ($_POST['products'] as $v) {
                                          $PriceAfterDiscount = $prices[$v] * (1 + VAT) * (1 - $discounts[$v]);
                                          echo "<li>$v: $PriceAfterDiscount EGP</li>";
                                          $total += $PriceAfterDiscount;
                                        }
                                        echo "<li>Total:<b> $total EGP</b></li></ul>";
                                      } else {
                                        $total = $prices[$_POST['products'][0]] * (1 + VAT) * (1 - $discounts[$_POST['products'][0]]);
                                        echo "<b>$total EGP</b>";
                                      }

                                      ?>
          </li>

          <li class="lead font-weight-bold"><b>Total Cost: <?= ($total + $delivery[$_POST['city']]) . ' EGP'; ?></b></li>
        </ul>
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