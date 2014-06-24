<?php

include 'connection.php';

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$senha= $_POST['senha'];


if ($usuario && $senha) {
    pg_query("UPDATE usuarios SET usuario = '$usuario', senha= '$senha'" . "where id =  $id;");
    header("location: userList.php");
}
?>


