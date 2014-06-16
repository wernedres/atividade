<?php


include 'connection.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if ($nome && $login && $email && $telefone) {
    pg_query("INSERT into atendente (user_nome,user_login, user_email, user_telefone)values('$nome', '$login', '$email', '$telefone')");
    header("location: atenteInsert.php");
}
?>
