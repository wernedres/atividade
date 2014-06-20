<?php

include 'connection.php';

$id= $_POST['id'];
$nome=$_POST['nome'];


if($nome){

	pg_query("UPDATE categoria set cate_nome = '$nome'" . " where cate_id =$id;");

	header("location:cateList.php");
}


?>