<?php
if($_GET){
    $first= $_GET['first'];
$second= $_GET['second'];
$operator = $_GET['operator'];
$result = '';
if (is_numeric($first) && is_numeric($second)) {
    switch ($operator) {
        case "+":
           $result = $first + $second;
            break;
        case "-":
           $result = $first - $second;
            break;
        case "*":
            $result = $first * $second;
            break;
        case "/":
            $result = $first / $second;
            break;
        case "%":
            $result = $first % $second;
            break;
        case "^":
            $result = $first ** $second;
            break;
    }
}

}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Simple Calculator</title>
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
                <h4 class="text-light text-center my-3">Calculator</h4>
                <form method="GET">
                    <div class="form-group">
                        <label for="num">Enter 1<sup>st</sup> Number</label>
                        <input type="number" name="first" class="form-control" id="formGroupExampleInput" placeholder="First Number">
                    </div>
                    <div class="form-group">
                        <label for="num2">Enter 2<sup>nd</sup> Number</label>
                        <input type="number" name="second" class="form-control" id="formGroupExampleInput2" placeholder="Second Number">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-warning btn-outline-dark btn-lg my-4" name="operator" type="submit" value="+">
                        <input class="btn btn-warning btn-outline-dark btn-lg my-4" name="operator" type="submit" value="-">
                        <input class="btn btn-warning btn-outline-dark btn-lg my-4" name="operator" type="submit" value="*">
                        <input class="btn btn-warning btn-outline-dark btn-lg my-4" name="operator" type="submit" value="/">
                        <input class="btn btn-warning btn-outline-dark btn-lg my-4" name="operator" type="submit" value="%">
                        <input class="btn btn-warning btn-outline-dark btn-lg my-4" name="operator" type="submit" value="^">
                    </div>

                    <div class="h5 alert alert-success text-center text-dark role=" alert" p-2">
                        <b>RESULT = <?= $result ?? ""?></b>
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