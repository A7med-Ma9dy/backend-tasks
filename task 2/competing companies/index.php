<html>
  <head>
    <title>PHP Functions</title>
  </head>
  <body>
    <?php 
      // Write your code here
$companyNames = ["Better", "Gong", "Glossier", "Discord", "Brex", "Clubhouse", "Attentive", "Outreach", "MikMak", "AirGarage", "Hiya", "Airtable", "Bestow", "Bloomscape", "Calm", "Curology", "Boulevard", "VideoAmp", "FloQast", "Nacelle", "Wave"];

$successRate = 50;

function randScore ($arr){
  foreach($arr as $k){
    $newArr[$k] = rand(0,100);
  }
  return $newArr;
}
function competition($arr, $successRate){
  foreach ($arr as $k=>$v){
    if ($v < $successRate){
      $newArr[$k] = rand(0,100);
    }else{
      $min[$k] = $v;
    }
  }
  
  if($newArr == null){
    asort($min);
    $firstKey = array_key_first($min);
    return $firstKey;
  }elseif(count($newArr) == 1){
    $firstKey = array_key_first($newArr);
    return $firstKey;
  }else{
    $successRate /= 2;
    return competition($newArr, $successRate);
  }
}

function successfulCompanies($companyNames, $successRate){
  $companies = randScore($companyNames);
  $winner = competition($companies, $successRate);
  echo "Congratulations $winner";
}


successfulCompanies($companyNames, $successRate);


    ?>
  </body>
</html>