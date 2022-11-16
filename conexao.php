<?php
$servidor = "localhost";
$user = "root";
$Senha = "";
$banco = "gerador_prova";

$conexao = mysqli_connect($servidor, $user, $Senha);
mysqli_select_db($conexao , $banco);

?>