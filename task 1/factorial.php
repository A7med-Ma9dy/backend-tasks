<!-- Instructions
Write a program to calculate the factorial for any number using a loop, then print the result at the end.

Criteria
It's not allowed to use numbers less than 0 or more than 20.
If a number outside the range have been used you must print an error message and stop the code (you can use exit).
Write a variable that holds the number to find the factorial for.
This variable will be used to test your code with multiple values, to make sure your code is correct.
If we assumed the variable holds the value 5 then the program should print
The factorial for 5 is: 120 -->
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      // Write your code here
      $n = 5; //put number for calc its factorial  

      if ($n <  0 || $n > 20) //check
      {
        echo "Use numbers less than 0 or more                   than 20";
        exit(1);
        
      }else {
        $fact = 1; //initializer & for 0&1 factorials
        for($i = 2; $i <= $n; $i++){
          $fact *= $i;
        }
        echo "The factorial for ", $n, " is: ", $fact;
      }
    ?> 
  </body>
</html>