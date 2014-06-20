<?php

include 'connection.php';

$id= $_POST['id'];
$curso= $_POST['curso'];
$duracao= $_POST['duracao'];
$categoria= $_POST['categorias'];
$professor= $_POST['mestre'];
$qtdAluno= $_POST['qtdAluno'];



if ($curso && $duracao && $categoria && $professor && $qtdAluno) {
 pg_query("UPDATE curso SET curs_nome = '$curso' , curs_duracao = '$duracao', curs_categoria = '$categoria', curs_professor= '$professor', curs_qtdaluno = '$qtdAluno'" . "where curs_id =  $id;");
   header("Location: cursList.php");

}


?>
