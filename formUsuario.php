<?php include 'connection.php'; ?>

<?php include_once 'header.php'; ?>
<?php include_once 'menu.php' ?>



<div class="container ">

   <div class="jumbotron">

          
         <h4 class="alert alert-success">Cadastro de usuario </h4>
<form class="form-horizontal" role="form" action="" method="post">
              
              <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                <div class="col-sm-5">
                    <input type="text" name="usuario" class="form-control" id="inputEmail3" require placeholder="Usuario" >
                </div>
              </div>


          <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
              <div class="col-sm-5">
                  <input type="password" name="senha" class="form-control"  require placeholder=" Senha">
               </div>

          </div>



 
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary">Cadastrar Usuario</button><br/><br/>
    

            </div>                                      
          </div>
      <input type="hidden" name="acao" value="cadUser">
 
  </form>

    </div>
</div>

<?php 



      if(isset($_POST['acao'])&& $_POST['acao']== "cadUser"){


     $usuario=$_POST['usuario'];
     $senha=$_POST['senha'];


      if($usuario == "" || $senha == ""){
       
      
    echo "<script>alert('Os campos nao podem ficar vazio')</script>";
  
  }else{

      
      $selectRegistro = pg_query("SELECT * from usuarios WHERE usuario = '$usuario'");

      if (pg_num_rows($selectRegistro) == 1) {

          echo "<script>alert('este usuario ja existe')</script>";
  
      
  }else{

            $inserirRegistro = pg_query("INSERT into usuarios (usuario,senha)values('$usuario','$senha')");
            echo "<script>alert('cadastro realizado com sucesso')</script>";
        }

      }
    
}
    // header("location:userList.php");
 ?>

<?php 

$parametro =$_GET["pag"];
     if(isset($parametro)){

include ("$parametro.php");


      }else{

   }

 ?>

<?php include_once 'footer.php';?>