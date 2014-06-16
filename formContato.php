



<?php require_once("connection.php"); ?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>

<div id="conteudo">



   <SCRIPT LANGUAGE="JavaScript">
            function ValidaEmail()
            {
                var obj = eval("document.contatos.email");
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

    <h4 class="alert alert-success">Cadastrar Contato</h4>
            <hr/><br/>


            <form  name="contatos" class="form-horizontal" action="insertContato.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                       <div class="col-sm-3">
                           <input name="nome"  type="text"  placeholder="Digite a nome" required>

                       </div> 
                </div>

    <div class="form-group">
                <label class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-3">
                        <input name="telefone" type="text"  value="" placeholder="Digite a telefone" required>
                     </div>
            </div>





            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-3">
                       <input name="email" type="text"  placeholder="Digite o email"  onBlur="ValidaEmail();" required>
                    </div>
             </div>

                             <div class="form-group">
                  <label class="col-sm-2 control-label">Profissao</label>
                       <div class="col-sm-3">
                           <input name="profissao"  type="text"  placeholder="Digite a profissao " required>

                        </div>
                </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Endereço</label>
                    <div class="col-sm-3">
                        <input name="endereco" type="text"  value="" placeholder="Digite o endereço" required>
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


