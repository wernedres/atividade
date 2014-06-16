



<?php require_once("connection.php"); ?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>



<div id="conteudo">



        <SCRIPT LANGUAGE="JavaScript">
            function ValidaEmail()
            {
                var obj = eval("document.curso.email");
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

    <h4 class="alert alert-success">Cadastrar usuario</h4>
           

            <form  class="form-horizontal"  name="curso" action="atentInserido.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 control-label">Aluno</label>
                       <div class="col-sm-3">
                           <input name="aluno"  type="text"  placeholder="Nome do aluno" required>

                       </div> 
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Curso</label>
                       <div class="col-sm-3">
                           <input name="curso"  type="text"  placeholder="Nome do curos" required>

                        </div>
                </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">Duração</label>
                    <div class="col-sm-3">
                       <input name="duracao" type="text"  placeholder="Duraçao do curso"  onBlur="ValidaEmail();" required>
                    </div>
             </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Professor</label>
                    <div class="col-sm-3">
                        <input name="professor" type="text"  placeholder="Nome do Professor" required>
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


