<?php


include 'connection.php';

$nome = $_POST['nome'];



if ($nome) {
    pg_query("INSERT into categoria (cate_nome)values('$nome')");
    header("location:cateInsert.php");
}
?>
