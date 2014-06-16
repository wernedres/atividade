<?php

include 'connection.php';
$id = $_GET['id'];

pg_query("delete from contatos where cont_id = $id;");
header("Location: contList.php");

?>