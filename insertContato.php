



 <?php

include 'connection.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];
$endereco = $_POST['endereco'];


if ($nome  && $telefone && $email  && $profissao && $endereco) {
    pg_query("INSERT into contatos (cont_nome,cont_telefone,cont_email,cont_profissao,cont_endereco) values('$nome', '$telefone', '$email', '$profissao', '$endereco')");
   
    header("Location:contList.php");
}
?>