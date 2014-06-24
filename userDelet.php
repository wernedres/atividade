<?php

include 'connection.php';
$id = $_GET['id'];

pg_query("delete from usuarios where id = $id;");
header("Location: userList.php");

?>