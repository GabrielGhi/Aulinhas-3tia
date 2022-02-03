<?php
$host = "localhost";
$user = "root";
$senha = "";
$bd = "estagio3b";

$mysqli = new mysqli($host,$user,$senha,$bd);



#connect_errno: mostra o codigo do erro;
#connect_error: mostra a descrição daquele erro;

if (isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $query = mysqli_query($mysqli, "INSERT INTO usuario (nome, user, senha, nivel ) VALUES ('$nome', '$user', '$senha', '$nivel')");
}
?>

<html> 
    <head>
        <title> Sistema Cadastro </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <form method="post" >
            <label>Nome: </label></br>
            <Input type="text" name="nome"></br>
            <label> User: </label></br>
            <Input type="text" name="user"></br>
            <label>Senha: </label></br>
            <Input type="password" name="senha"></br>
            <label>Nivel: </label></br>
             <select name="nivel" class="form-select" aria-label="Default select example">   
                <option selected> Selecione uma das opções</option>
                <option> User </option>
                <option> Admin </option>
            </select> </br> </br> 
            <button name="cadastrar" class="btn btn-outline-primary">Cadastrar</button> 
        </form>
    </body>
</html>    