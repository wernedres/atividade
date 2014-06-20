



<?php require_once("connection.php");?>



<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>



<div id="conteudo">

<div class="container"> 
        <div class="jumbotron">

    <h4 class="alert alert-success">Cadastrar Categoria</h4>
        
            <form  class="form-horizontal"   action="cateUpdate_Validupdate.php" method="post" enctype="multipart/form-data">


                              <?php

                              $id=['id'];
                              $nome=['nome'];

                              ?>

               <input name="id"  type="hidden" required value="<?php echo $_GET['id']; ?>">



                <div class="form-group">
                    <label class="col-sm-2 control-label">Categoria</label>
                       <div class="col-sm-3">
                           <input name="nome"  type="text"  placeholder="Digite a nome" value="<?php echo $_GET['nome'];?>" required>

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
<?php require_once("footer.php"); 


