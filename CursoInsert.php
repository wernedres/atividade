



<?php require_once("connection.php"); ?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>



<div id="conteudo">



        <SCRIPT LANGUAGE="JavaScript">
            function ValidaEmail()
            {
                var obj = eval("document.atendente.email");
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

    <h4 class="alert alert-success">Cadastrar Cursos</h4>
            <hr/><br/>


            <form  class="form-horizontal"  name="atendente" action="atentInserido.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 control-label">Curso</label>
                       <div class="col-sm-3">
                           <input name="curso"  type="text"  placeholder="Digite a nome do curso" required>

                       </div> 
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Duração</label>
                       <div class="col-sm-3">
                           <input name="duracao"  type="text"  placeholder="Digite a duração " required>

                        </div>
                </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Categoria</label>
                    <div class="col-sm-3">
                       <input name="categoria" type="text"  placeholder="Digite a categoria"   required>
                    </div>
             </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Professor</label>
                    <div class="col-sm-3">
                        <input name="professor" type="text"  value="" placeholder="Digite o nome do professor" required>
                     </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Qtd max de alunos</label>
                    <div class="col-sm-3">
                        <input name="qtdAlun" type="text"  value="" placeholder="Digite a quantidade de alunos" required>
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


