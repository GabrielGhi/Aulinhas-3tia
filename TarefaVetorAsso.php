<?php
$Nomes = array("Gabriel" => "Oscar","Rafner" => "Gabriel", "Pablo" => "Alberto","Veteri" => "Giovani", "Octavio" => "Nascimento");

$y = 1;

foreach ($Nomes as $x => $x_valores) {
	echo $y." - ".$x. ": ".$x_valores. "<br>";
	$y++;
}

echo "Nomes:" .$Nomes['Gabriel']."<br>";
echo "Nomes:" .$Nomes['Rafner']."<br>";
echo "Nomes:" .$Nomes['Pablo']."<br>";
echo "Nomes:" .$Nomes['Veteri']."<br>";
echo "Nomes:" .$Nomes['Octavio']."<br>";

echo "<hr>";

$carros = array(
	array("Toyota" => "Corolla", "Quantida" => 10, "Vendas" => 8),
	array("Jeep" => "Compass", "Quantidade" => 2, "Vendas" => 20));

$y = 1;

foreach($carros as $v_carros){
	echo $y." - ".$x. ": ".$v_carros. "<br>";
	$y++;
}
?>