
<?php
session_start();
include_once 'connection.php';
include_once 'funcoes.php';
protegePagina();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Bootstrap Exemplo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="stylesheet" type="text/css" href="css/userLogado.css">

  </head>
  <body >
<div id="container">
  
<div id="topo"><img src="../img/logo123.png">
    <div class="userLogado">


    Bem vindo,<?php echo $_SESSION['usuario']; ?>


 <a href='?acao=sair'>Deslogar</a>

            <?php
            if (isset($_GET['acao']) && $_GET['acao'] == "sair") {
                sairPagina();
            }
            ?>
 </div>

</div>