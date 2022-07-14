<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST) {
    
    if (empty($_POST['number']) || !is_numeric($_POST['number'])) {
        $error['number'] = "<div class='text-danger font-weight-bold'>Number Is Required</div>";
    }//if(empty($error))
    else{
        //validation needed
        $_SESSION['phone'] = $_POST['number'];
        header('location:review.php');die;
        //print_r($_SESSION);die;
    }
    
    // if (is_numeric($_POST['number'])) {
    //     echo var_export($_POST['number'], true) . " is numeric";die;
    // } else {
    //     echo var_export($_POST['number'], true) . " is NOT numeric";die;
    // }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Number</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 m-5">
                <h1 class="h1 text-danger text-center">Hospital</h1>
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="number" class="col-form-label text-light">Phone Number</label>
                        <div class="col-7">
                            <input type="number" id="number" name="number" class="form-control" placeholder="Enter Your Number" value="<?= $_POST['number'] ?? "" ?>" />
                        </div>
                        <small class="form-text text-muted mt-2">We'll never share your number with anyone else.
                            </small>
                        </div>
                        <div class="form-group row mt-3">
                            <button type="submit" class="btn btn-danger rounded">Review</button>
                        </div>
                    <?= $error['number']?? ""?>
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