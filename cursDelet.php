<?php

include 'connection.php';
$id = $_GET['id'];

pg_query("delete from curso where curs_id = $id;");
header("Location: cursList.php");

?>