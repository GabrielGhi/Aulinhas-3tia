<?php
$n1 = 0;
$n2 = 0;
$resultado = 0;
$calcular = 'somar';

if (isset($_GET['n1'],$_GET['n2'], $_GET['calcular'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $calcular = $_GET['calcular'];

    switch($calcular) {
        case 'somar':
            $resultado = $n1 + $n2;
            break;
    }
}


?>

<html>
    <head>
        <title> Calculo </title>
    </head>

    <body>
    <form>
        Primeira Nota<br />
        <input type="number" name="n1" required/><br />
        Segunda Nota<br />
        <input type="number" name="n2" required/><br />
        <select name = "calcular">
            <option value="somar">Somar </option> 
        </select><br />
        <input type="submit" value="calcular"/>
        <br />
        <br />
        <p> Sua media é <?= $resultado ?> </p> 
    </form>
    </body>
</html> 