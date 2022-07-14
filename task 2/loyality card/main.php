<?php
$loyalitycard  = false;
$total = 700;
if ( $total > 750  &&  $loyalitycard == false ){
  $total *= (1- 0.1);
}elseif ( $loyalitycard  == true  &&  $total <= 750){
  $total *= (1- 0.05);
}elseif ( $total > 750  &&  $loyalitycard == true ){
  $total *= (1- 0.15);
}else{
  $total;
}
echo $total;