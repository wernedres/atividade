<?php

include 'connection.php';

$id= $_POST['id'];
$nome= $_POST['nome'];
$telefone= $_POST['telefone'];
$email= $_POST['email'];
$profissao= $_POST['profissao'];
$endereco= $_POST['endereco'];


if ($nome && $telefone && $email && $profissao && $endereco) {
 pg_query("UPDATE contatos SET cont_nome = '$nome' , cont_telefone = '$telefone', cont_email = '$email', cont_profissao = '$profissao', cont_endereco = '$endereco'" . "where cont_id =  $id;");
   header("location: contList.php");

}


?>

