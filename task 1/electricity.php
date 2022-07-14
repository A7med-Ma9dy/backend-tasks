<!-- 6)	Write a PHP program to input electricity unit charges and calculate total electricity bill according to the given condition:
For first 50 units. 0.50/unit
For next 100 units. 0.75/unit
For next 100 units. 1.20/unit
For unit above 250. 1.50/unit
An additional surcharge of 20% is added to the bill elec.php -->

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

<!-- The electricity company wants to know to which group the citizens belong, based on their consumption and how much money they should pay at the end of the month.

Because of that the electricity company decided to reach out to you and asked you to write a program that finds which group a specific citizen belongs to.

Here are some information that will help you to decide which group a citizen belongs to:

Citizens groups
Group 1: 1 to 300 Kilowatt/hour, cost = 0.5$ for each Kilo.
Group 2: 300 to 600 Kilowatt/hour, cost = 1$ for each Kilo.
Group 3: more than 600 Kilowatt/hour, cost = 2$ for each Kilo.
To calculate the cost in one month:
Use a variable called electricityConsumption.
In the variable add a value you want your program to check (this value in this variable is how much Kilowatts have been consumed in a single month).
At the end print to which group the citizen belongs to and how much his/her consumption cost. -->

<!-- <html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      // Write your code here
      
    //   $electricityConsumption = 1000;
    //   $category = $electricityConsumption / (24*30);
      
      //check conditions and print their group and consumption cost.
    //   if ( $category >=1 && $category <= 300){

    //    echo "Group 1: 1 to 300 Kilowatt/hour, cost = " . $electricityConsumption * 0.5 . "$.";

    //   } elseif ( $category > 300 && $category <= 600){

    //     echo "Group 2: 300 to 600 Kilowatt/hour, cost = " . $electricityConsumption . "$.";

    //   } elseif( $category > 600 ){

    //     echo "Group 3: more than 600 Kilowatt/hour, cost = " . $electricityConsumption * 2 . "$.";

    //   }else{

    //     echo "Invalid"; // print invalid if all conditions failed.

    //   }
      
     ?> 
  </body>
</html> -->