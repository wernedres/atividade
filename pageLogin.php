<?php
session_start();

$login = "";
$senha = "";

if ($login ==$_POST['login'] and $senha ==$_POST['senha']) {

    $_SESSION['logado'] = true;
    

  header("location:index.php");
   
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="styles/login.css">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="container ">

<div id="login">


        <div class="jumbotron">

           <h4 class="alert alert-success">M² Smart - Area Restrita</h4>
<form class="form-horizontal" role="form" action="" method="post">
  
  <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-5">
        <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="usuario" >
    </div>


  </div>


  <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-5">
          <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="senha">
       </div>

  </div>



 
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary">Logar</button>
            </div>                                      
          </div>

  </form>
  </div>
</div>
</div>
</body>

</html>




