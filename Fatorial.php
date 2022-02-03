<?php 
  $n= 5;
  $fatorial=1;

  if($n < 0) {
      echo "Error";
  }

  for($count=1; $count<=$n ; $count++){
      $fatorial *= $count;
      echo $fatorial;
  }
   
   
 ?>