<?php
//////loop
function Palindrome($str){
  $first = 0;
  $last = strlen($str) - 1;
  $flag = 0;
  while ($last > $first){
    if ($str[$first] != $str[$last]){
      $flag = 1;
      break;
      }
    $first++;
    $last--;
    }
  if ($flag == 0){
    echo "Palindrome \n";
  }else{
    echo "Not Palindrome \n";
  }
}
//another solution
// <?php
// function palindromeIndex($str) {
//     // Write your code here
//     $i = 0;
//     $j = strlen($str) - 1;

//     while ($i < $j) {
//         if ($str[$i] != $str[$j])
//             break;
//         $i ++;
//         $j --;
//     }

//     if ($i > $j)
//         return -1;

//     $a = $i+1;
//     $b = $j;
//     while ($a<$j and $b>$i+1) {
//         if($str[$a]!=$str[$b])
//             return $j;
//         $a++;
//         $b--;
//     }
//     return $i;
// }

/////recursion
function Palin ($str){
  $length = strlen($str);
  if ($length == 0 || $length == 1){
    echo "palindrome2 \n";
  }
  else{
    if(substr($str, 0, 1) == substr($str, ($length - 1), 1)){
       return Palin(substr($str, 1, ($length -2)));
    }
    else{
      echo "Not Palindrome2 \n";
    }  
  }
}

Palindrome("radar");
Palindrome("rubber");
Palindrome("malayalam");
Palin("radar");
Palin("rubber");
Palin("malayalam");

// another solution

// function stringrev (string $str){ 

//     //changes string to array with index lenth u decide
//    $str_arr= str_split($str,1);
 
//    //revreses array down/top
//    $str_rev = array_reverse($str_arr,true);
 
//    //returned array as a string
//    $reversed = implode($str_rev);
 
//  //   echo "<pre>";
//  //   print_r($str_arr) ;
//  //   echo "</pre>";
 
//  //   echo "<pre>";
//  //   print_r($str_rev) ;
//  //   echo "</pre>";
 
//  //   echo $reversed . "<br>";
 
//    if($str === $reversed)
//    {
//        $result ="[" . $str ."]" . " a palidrome" . "<br>";
//        $result .= "<br>"." because the string: " . $str . " is the same after reversing";
//    }
 
//    else
//    {
//        $result = "[" . $str ."]" . " not a palindrome"."<br>";
//        $result .= "<br>"."Because the string: " . $str . " is " . $reversed . " after reversing";
 
//    }
//    return $result;
//  }  
 
//  // $str="Lol";
//  // echo stringrev($str);
//  if (isset( $_POST['submit'] )) {
//      $str = $_POST['string'];
//      echo stringrev($str);
//  }
 
//  // echo "<pre>";
//  // print_r(stringrev($str));
//  // echo "</pre>";
 
//  ?>
<!-- //  </body>
//  </html> -->


