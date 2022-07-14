<?php
//require_once "review.php";
session_start();
$questions = $_SESSION['questions'];
$quests = $_SESSION['quests'];
$total = 0;
if (isset($_SESSION['answer'])) {
    foreach ($_SESSION['answer'] as $key => $value) {
        $total += $value;
    }
} else {
    header('location:review.php');
}
//print_r($_SESSION);
//print_r($total);die;
if ($total == 50) {
    $display = 'Excellent';
} elseif ($total < 50 && $total > 25) {
    $display = 'Very Good';
} elseif ($total == 25) {
    $display = 'Good';
} else {
    $display = 'Bad';
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <h1 class="h1 text-danger text-center m-5">Your Review</h1>
        <div class=" d-flex justify-content-center mt-5">
            <div class=" align-self-center w-50">
                <table class="table table-striped table-bordered table-secondary table-hover text-center text-capitalize">
                    <thead class="thead-light">
                        <tr>
                            <th>Questions</th>
                            <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($questions as $index => $question) { ?>
                            <tr>
                                <th scope="row"><?= $question ?></th>
                                <?php foreach ($quests as $k => $v) {
                                    if ($_SESSION['answer'][$index] == $v) {
                                        echo "<td>$k</td>";
                                    }
                                } ?>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th scope="row">Overall</th>
                            <td><?= (($total / 50) >= .5) ? "<h5 class='text-success'>$display</h5>" : "<h5 class='text-danger'>$display</h5>" ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-50 mx-auto text-center lead">
            <?= (($total/50)>=.5) ? "<div class='alert alert-success'>Thank You</div>" : "<div class='alert alert-danger'>WE Will Reach You On This Number {$_SESSION['phone']}</div>" ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>