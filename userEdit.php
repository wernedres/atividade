
<?php include 'connection.php';?>
<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>

         <div id="conteudo">





                <div class="container"> 
        <div class="jumbotron">

    <h4 class="alert alert-success">Atualizar dados do Uusario</h4>


 <form  class="form-horizontal"  name="usuarios" action="userUpdate_Validupdate.php" method="post" enctype="multipart/form-data">
                      <input name="id"  type="hidden" required value="<?php echo $_GET['id']; ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Usuario</label>
                       <div class="col-sm-3">
                           <input name="usuario"  type="text"  placeholder="Digite o Nome do usuario"   required value="<?php echo $_GET['usuario'];?>">

                       </div> 
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Senha</label>
                       <div class="col-sm-3">
                           <input name="senha"S type="password"  required placeholder="Digite a senha " value="<?php echo $_GET['senha'];?>" >

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
