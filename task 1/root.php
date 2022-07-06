<?php
if(isset($_GET['submit'])){
        if ($_GET['power']) {
        $num = (float) $_GET['number'];
        $power = (float) $_GET['power'];
        $result = $num ** (1 / $power);
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>ROOT</title>
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
                <h4 class="text-light text-center my-3">Get Specific Root of a Number</h4>
                <form method="GET">
                    <div class="form-group">
                        <label for="num">NUMBER</label>
                        <input type="number" name="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Number">
                    </div>
                    <div class="form-group">
                        <label for="power">POWER</label>
                        <input type="number" name="power" class="form-control" id="formGroupExampleInput2" placeholder="Enter Number">
                    </div>
                    <input class="btn btn-warning btn-lg my-4" type="submit" name="submit" value="RESULT">
                    <div class="h5 alert alert-success text-center text-dark">
                        <b>RESULT = <?= $result ?? "" ?></b>
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