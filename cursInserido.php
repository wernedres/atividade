<?php 

include 'connection.php';


$curso = $_POST['curso'];
$duracao = $_POST['duracao'];
$categoria = $_POST['categorias'];
$professor = $_POST['mestre'];
$qtdAluno = $_POST['qtdAluno'];


if ($curso && $duracao && $categoria && $professor && $qtdAluno){

	pg_query("INSERT into curso (curs_nome,curs_duracao,curs_qtdaluno,curs_categoria, curs_professor) values ('$curso', '$duracao', '$qtdAluno','$categoria', '$professor')");
     header("Location:cursList.php");
}







