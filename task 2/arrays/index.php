<html>
  <head>
    <title>PHP Arrays</title>
  </head>
  <body>
    <?php 

$countries = ["Jordan","Palestine","Sudan","Libya","Lebanon","Syria","Yemen","Iraq"];

foreach ($countries as $key){
  $arr[$key] = rand(1000000, 3000000);
}
asort($arr);
//echo "<pre>";
//print_r($arr);
foreach ($arr as $key => $value){
  echo "$key Population: $value <br/>";
}

?> 
  </body>
</html>