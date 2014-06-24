<?php


include 'connection.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



if ($usuario && $senha) {
    pg_query("INSERT into usuarios (usuario,senha)values('$usuario','$senha')");
    header("location:userList.php");
}
?>
