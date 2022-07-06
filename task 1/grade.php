<?php
if($_GET){
    define('max_grade', 100);
    $num1 = (float)$_GET['num-1'];
    $num2 = (float)$_GET['num-2'];
    $num3 = (float)$_GET['num-3'];
    $num4 = (float)$_GET['num-4'];
    $num5 = (float)$_GET['num-5'];
    $sum = $num1 + $num2 + $num3 + $num4 + $num5;
    $precentage = ($sum / (max_grade * 5)) *100;
    if ($precentage >= 90){
        $grade = 'A';
    }elseif($precentage >= 80){
        $grade = 'B';
    }elseif($precentage >= 70){
        $grade = 'C';
    }elseif($precentage >= 60){
        $grade = 'D';
    }elseif($precentage >= 40){
        $grade = 'E';
    }elseif($precentage < 40){
        $grade = 'F';
    }else{
        $grade = 'Invalid';
    }
    

}


?>





<!doctype html>
<html lang="en">

<head>
    <title>Grades</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 bg-dark text-light">
                <h4 class="text-light text-center my-3">Calc Grades</h4>
                <form method="GET">
                    <div class="form-group">
                        <label for="phy">PHYSICS</label>
                        <input type="number" name="num-1" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Grade">
                    </div>
                    <div class="form-group">
                        <label for="chem">CHEMISTRY</label>
                        <input type="number" name="num-2" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Grade">
                    </div>
                    <div class="form-group">
                        <label for="bio">BIOLOGY</label>
                        <input type="number" name="num-3" class="form-control" id="formGroupExampleInput3" placeholder="Enter Your Grade">
                    </div>
                    <div class="form-group">
                        <label for="math">MATHEMATICS</label>
                        <input type="number" name="num-4" class="form-control" id="formGroupExampleInput3" placeholder="Enter Your Grade">
                    </div>
                    <div class="form-group">
                        <label for="comp">COMPUTER</label>
                        <input type="number" name="num-5" class="form-control" id="formGroupExampleInput3" placeholder="Enter Your Grade">
                    </div>
                    <input class="btn btn-warning btn-outline-dark btn-lg my-4" type="submit" name="submit" value="Calculate">
                    <div class="h5 alert alert-success text-center text-dark role="alert" p-2">
                    PERCENTAGE = <b> <?= $precentage ?? ""; ?>%</b> 
                        <br>
                        <br>
                   <b>GRADE <?= $grade ?? "";  ?></b>

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