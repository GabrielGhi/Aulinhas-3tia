<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avaliação3b";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli -> connect_errno){
	echo "Falha na conexão: (". $mysqli -> connect_errno. ")". $mysqli -> connect_error;
}

?>

<?php

$consulta = "SELECT * from meusdados";
$con = $mysqli -> query($consulta) or die ($mysqli -> error);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">idnome</th>
      <th scope="col">rg</th>
       <th scope="col">cpf</th>
        <th scope="col">endereço</th>
         <th scope="col">conplemento</th>
          <th scope="col">Nº</th>
           <th scope="col">bairro</th>
            <th scope="col">cidade</th>
            <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
<?php while ($dados = $con -> fetch_array()){ ?>
    <tr>
      <td><?php echo $dados["fk_idNome"]; ?></td>
     <td><?php echo $dados["Rg"]; ?></td>
     <td><?php echo $dados["Cpf"]; ?></td>
     <td><?php echo $dados["Endereço"]; ?></td>
     <td><?php echo $dados["Conplemento"]; ?></td>
     <td><?php echo $dados["Nº"]; ?></td>
     <td><?php echo $dados["bairro"]; ?></td>
     <td><?php echo $dados["cidade"]; ?></td>
     <td><?php echo $dados["Email"]; ?></td>

    
   </tr>
  <?php } ?>
  </tbody>
</table>
</body>
</html>