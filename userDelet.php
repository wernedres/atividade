<?php

include 'connection.php';
$id = $_GET['id'];

pg_query("delete from usuarios where user_id = $id;");
header("Location: userList.php");

?>