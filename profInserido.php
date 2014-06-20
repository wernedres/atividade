<?php


include 'connection.php';

$nome = $_POST['nome'];



if ($nome) {
    pg_query("INSERT into professor (prof_nome)values('$nome')");
    header("location:profList.php");
}
?>
