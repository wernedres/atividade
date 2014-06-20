


<?php
session_start();
if(!$_SESSION['logado'])  {
header("location: pageLogin.php");
}    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Bootstrap Exemplo</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/login.css">

  </head>
  <body >
<div id="container">
  
<div id="topo"><img src="../img/logo123.png"></div>