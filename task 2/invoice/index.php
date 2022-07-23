<?php

// user -> enter his name
// user -> enter his phone
// user -> select  $cities = ['cairo'=>0,'alex'=>50,'aswan'=>200]
// user -> select $products = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=> 300, 'watch'=>500]
// $discount = ['laptop'=>0.2,'mobile'=>0.1,'tv'=> 0.05 , 'tshirt'=>0, 'watch'=>0.5]
// vat : 14%
?>
<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-light lead">

    <div class="container">
        <div class="row">
        <div class="col-12 text-center m-4 bg-warning">
                <h1 class="h1 font-weight-bold">
                    Buy Now!
                </h4>
            </div>
            <div class="col-4 offset-4">
                <form action="invoice.php" method="post">
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="phone" placeholder="Your Number">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" class="custom-select">
                            <!-- <option value="" selected>Select Your city</option> -->
                            <option value="Cairo" selected>Cairo</option>
                            <option value="Alex">Alex</option>
                            <option value="Aswan">Aswan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="products[]">Products</label>
                        <select multiple name="products[]" class="custom-select" size="4">
                            <option value="Laptop">Laptop</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Watch">Watch</option>
                            <option value="Tv">Tv</option>
                            <option value="Tshirt">T-Shirt</option>
                        </select>
                        <small class="form-text text-muted">with VAT 14%</small>
                    </div>
                    <button class=" btn btn-outline-primary form-control"> Buy </button>
                </form>
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