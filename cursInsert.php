

<?php require_once("connection.php"); 



?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>



<div id="conteudo">
<div class="container"> 
<div class="jumbotron">

<h4 class="alert alert-success">Cadastrar Curso</h4>

<form  class="form-horizontal"  name="usuarios" action="cursInserido.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label class="col-sm-2 control-label">Curso</label>
         <div class="col-sm-3">
             <input name="curso"  type="text"  placeholder="Digite a nome" required>

         </div> 
  </div>


  <div class="form-group">
    <label class="col-sm-2 control-label">Duração</label>
         <div class="col-sm-3">
             <input name="duracao"  type="text"  placeholder="Digite a Duração " required>

          </div>
  </div>


  <div class="form-group">
      <label class="col-sm-2 control-label">Categoria</label>
      <div class="col-sm-1">
          <select name="categorias"  required="true">
              <option>Selecione sua categoria</option>
    
                <?php
                    $consulta = pg_query ("SELECT * from categoria order by cate_nome;");
                    while ($linha = pg_fetch_object($consulta)): 
                ?>
        
                  <option value="<?php echo $linha->cate_id; ?>"><?php echo $linha->cate_nome; ?></option>
              <?php endwhile; ?>
          </select>
      </div>
  </div>


  <div class="form-group">
      <label class="col-sm-2 control-label">Professor</label>
      <div class="col-sm-1">
          <select name="mestre"  required="true">
              <option>Selecione um professor</option>
    
                <?php
                    $consulta = pg_query ("SELECT * from professor order by prof_nome;");
                    while ($linha = pg_fetch_object($consulta)): 
                ?>
        
                  <option value="<?php echo $linha->prof_id; ?>"><?php echo $linha->prof_nome; ?></option>
              <?php endwhile; ?>
          </select>
      </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Qtd max de Aluno</label>
         <div class="col-sm-3">
             <input name="qtdAluno"  type="text" value="30"  placeholder="Digite a Qtd max de aluno " required>

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