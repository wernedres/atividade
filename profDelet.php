<?php

include 'connection.php';
$id = $_GET['id'];

pg_query("delete from professor where prof_id = $id;");
header("Location: profList.php");

?>