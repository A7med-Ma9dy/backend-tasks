<?php
if($_POST){
    define('add_charge', 0.2);
    $unit = (float)$_POST['number'];
    $bill  = 0;
    if($unit > 0 && $unit <= 50){
        $bill = $unit * 0.5;
    }elseif($unit > 50 && $unit <= 150){
        $bill = $unit * 0.75;
    }elseif($unit > 150 && $unit <= 250){
        $bill = $unit * 1.2;
    }elseif($unit > 250){
        $bill = $unit * 1.5;
    }

    $bill += ($bill * add_charge);

}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Electricity Bill</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 bg-dark text-info">
                <h4 class="text-light text-center my-3">Calc Electricity Bill</h4>
                <form method="POST">
                    <div class="form-group">
                        <label for="num">Electricity Unit Charges</label>
                        <input type="number" name="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Unit">
                    </div>
                    <input class="btn btn-warning btn-outline-dark btn-lg my-4" type="submit" name ='submit' value="Calculate">
                    <div class="h5 alert alert-success text-center text-dark role="alert" p-2">
                        <b>TOTAL ELECTRICITY BILL = <?= $bill ?? ""?> L.E</b>
                    </div>
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