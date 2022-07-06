<?php
if($_GET){
    $num1 = $_GET['first'];
    $num2 = $_GET['second'];
    $num3 = $_GET['third'];
    if($num1 >= $num2 && $num1 >= $num3){
        $max=$num1;
        if($num2>=$num3){
            $min=$num3;
        }else{
            $min=$num2;
        }
    }elseif($num2>=$num3){
        $max=$num2;
        if($num1>=$num3){
            $min=$num3;
        }else{
            $min=$num1;
        }
    }else{
        $max=$num3;
        if($num1>=$num2){
            $min=$num2;
        }else{
            $min=$num1;
        }
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <title>max-min</title>
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
                <h4 class="text-light text-center my-3">Get Max-Min Number</h4>
                <form method="GET">
                    <div class="form-group">
                        <label for="num">Enter 1<sup>st</sup> Number</label>
                        <input type="number" name="first" class="form-control" id="formGroupExampleInput" placeholder="First Number">
                    </div>
                    <div class="form-group">
                        <label for="num2">Enter 2<sup>nd</sup> Number</label>
                        <input type="number" name="second" class="form-control" id="formGroupExampleInput2" placeholder="Second Number">
                    </div>
                    <div class="form-group">
                        <label for="num3">Enter 3<sup>rd</sup> Number</label>
                        <input type="number" name="third" class="form-control" id="formGroupExampleInput3" placeholder="Third Number">
                    </div>
                    <input class="btn btn-warning btn-outline-dark btn-lg my-4" type="submit" value="Check!">
                    <div class="h5 alert alert-success text-center text-dark role="alert" p-2">
                        <b>MAX NUMBER = <?= $max ?? ""?>
                        <br>
                        MIN NUMBER = <?= $min ?? ""?></b>
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