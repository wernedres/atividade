<?php

include 'connection.php';

$id= $_POST['id'];
$nome= $_POST['nome'];


if ($nome ) {
 pg_query("UPDATE professor SET prof_nome = '$nome'" . "where prof_id =  $id;");
   header("location: profList.php");

}


?>

