<?php

include 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$login= $_POST['login'];
$telefone = $_POST['telefone'];

if ($nome && $email && $login && $telefone) {
    pg_query("UPDATE usuarios SET user_nome = '$nome', user_email = '$email', user_login = '$login', user_telefone = '$telefone'" . "where user_id =  $id;");
    header("location: userList.php");
}
?>


