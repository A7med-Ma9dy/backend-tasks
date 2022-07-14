<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['loan']) && !empty($_POST['years']) && $_POST['loan'] > 0 && $_POST['years'] > 0) {

        function calculate(float $rate): array
        {
            $investRate = $_POST['loan'] * $rate * $_POST['years'];
            $totalLoan = $_POST['loan'] + $investRate;
            $monInstall = round($totalLoan / ($_POST['years'] * 12), 2);
            return ['investRate' => $investRate, 'totalLoan' => $totalLoan, 'monInstall' => $monInstall];
        }

        if ($_POST['years'] <= 3) {
            $interestRate = .1;
            $result = calculate($interestRate);
        } elseif ($_POST['years'] <= 30 && $_POST['years'] > 3) {
            $interestRate = .15;
            $result = calculate($interestRate);
        } else {
            $error = "<div class='alert alert-danger text-center'>Maximum 30 years for a loan</div>";
        }
        // print_r(count($result));
    } else {
        $error = "<div class='alert alert-danger text-center'>Please Fill Out All Inputs</div>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-light">
    <h1 class="h1 text-info text-center display-3 font-weight-bold">Bank</h1>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-4">
                <img src="giphy.gif" class="img-fluid rounded-circle" alt="calculator image">
            </div>
            <div class="col-6">
                <?= $error ?? "" ?>
                <form action="" method="post" class="w-75">
                    <div class="mb-3">
                        <label for="name" class="form-label">UserName</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $_POST['name'] ?? "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="loan" class="form-label">Loan Amount</label>
                        <input type="number" class="form-control" name="loan" placeholder="Loan" value="<?= $_POST['loan'] ?? "" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="years" class="form-label">Loan Years</label>
                        <input type="number" class="form-control" name="years" placeholder="Number of Years" value="<?= $_POST['years'] ?? "" ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
                <?php if (isset($result)) { ?>

                    <table class="table table-bordered table-striped mt-5 text-center">
                        <thead>
                            <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Interest Rate</th>
                                <th scope="col">Invest Rate</th>
                                <th scope="col">Loan After Interest</th>
                                <th scope="col">Monthly Installment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $_POST['name'] ?></td>
                                <td><?= $interestRate ?></td>
                                <td><?= $result['investRate'] ?></td>
                                <td><?= $result['totalLoan'] ?></td>
                                <td><?= $result['monInstall'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
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