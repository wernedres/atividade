<?php

session_start();
include 'connection.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



if (isset($_POST['acao']) && ($_POST['acao'] == 'fazerLogin')) {

    if ($usuario == "" || $senha == "") {

        echo "<script>alert('os campos nao podem ficar vazio'); location.href='index.php'</script>";
    } else {

        $selectLogin = pg_query("SELECT * from usuarios WHERE usuario ='$usuario' and senha = '$senha'");
              
        if (pg_num_rows($selectLogin) > 0) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;

     	echo"<script>location.href='painel.php'</script>";
        } else {

            echo"<script>alert('login incorreto');location.href='index.php'</script>";
        }
    }
}
?>

