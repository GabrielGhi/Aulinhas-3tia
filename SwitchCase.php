<?php
$idade = 25;

 switch ($idade){
     case $idade <= 12:
        echo "Ele é uma criança";
        break;
    
    case $idade <= 18:
        echo "ele é adolescente";
        break;
    
    case $idade <= 64:
        echo "ele é adulto";
        break;

    case $idade >= 65:
        echo "ele é idoso";
        break;
 }

?>
