<?php
session_start();
if(!isset($_SESSION['phone'])){
    header('location:number.php');
}
$questions = [
    "1- Are you satisfied with the level of cleanliness?",
    "2- Are you satisfied with the prices?",
    "3- Are you satisfied with the nursing service?",
    "4- Are you satisfied with the level of the doctor?",
    "5- Are you satisfied with the calmness in the hospital?"
];
$quests = [
    "bad" => 0,
    "good" => 3,
    "very good" => 5,
    "excellent" => 10
];
$_SESSION['questions'] = $questions;
$_SESSION['quests'] = $quests;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST) && count($_POST) == 5){
        $_SESSION['answer'] = $_POST;
        header('location:result.php');die;
    }else{
        $error="<div class='alert alert-danger text-center'>Please Answer All Questions</div>";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
      <div class="container">
        <div class="row">
            <div class="col-6 m-5">
                <h1 class="h1 text-danger text-center">Hospital Review</h1>
            </div>
            <div class="col-12">
                <?= $error ?? ""?>
                <form action="" method="post">
                    <table class="table table-striped table-bordered table-secondary table-hover text-center text-capitalize">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Question</th>
                                <?php
                                foreach($quests as $key=>$value){
                                    echo"<th scope='col'>$key</th>";
                                }
                                ?>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach($questions as $index=>$question){
                                echo"<tr>
                                <th scope='row'>$question</th>";
                                foreach($quests as $key=>$value){
                                    echo"<td><input type='radio' name='$index' value='$value'></td>";
                                }
                                echo"</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-danger rounded w-100">Submit</button>
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