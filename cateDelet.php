<?php

include 'connection.php';
$id = $_GET['id'];

pg_query("delete from categoria where cate_id = $id;");
header("Location: cateList.php");

?>