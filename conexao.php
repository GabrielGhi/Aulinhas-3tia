<?php 
# Criar variveis de conexão
$host = "localhost";
$usuario = "root";
$senha = "";
$base = "!mb";

$conexao = mysqli_connect($host,$usuario,$senha,$base);

#connect_errno: mostra o codigo do erro;
#connect_error: mostra a descrição daquele erro;
?>