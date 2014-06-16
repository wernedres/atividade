
<?php

include 'connection.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$login = $_GET['login'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
?>


<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>

         <div id="conteudo">


        <SCRIPT LANGUAGE="JavaScript">
            function ValidaEmail()
            {
                var obj = eval("document.usuarios.email");
                var txt = obj.value;
                if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
                {
                    alert('Email incorreto');
                    obj.focus();
                }
            }
        </script>




                <div class="container"> 
        <div class="jumbotron">

    <h4 class="alert alert-success">Atualizar dados do Aluno</h4>


 <form  class="form-horizontal"  name="usuarios" action="userUpdate_Validupdate.php" method="post" enctype="multipart/form-data">
                      <input name="id"  type="hidden" required value="<?php echo $_GET['id']; ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                       <div class="col-sm-3">
                           <input name="nome"  type="text"  placeholder="Digite a nome"   required value="<?php echo $_GET['nome'];?>">

                       </div> 
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Login</label>
                       <div class="col-sm-3">
                           <input name="login"  type="text"  placeholder="Digite o login " required value="<?php echo $_GET['login'];?>" >

                        </div>
                </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                       <input name="email" type="text"  placeholder="Digite o email"  onBlur="ValidaEmail();" required value="<?php echo $_GET['email'];?>" >
                    </div>
             </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-3">
                        <input name="telefone" type="text" placeholder="Digite a telefone" required value="<?php echo $_GET['telefone'];?>" >
                     </div>
            </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-7">
                        <input type="submit" value="Cadastrar" class="btn btn-success"/>
                    </div>
                </div>
        
            </form>



    </div>
            </div>
                </div>
<?php require_once("footer.php"); ?>