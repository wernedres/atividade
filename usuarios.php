<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<div id="conteudo">

    <h4 class="alert alert-success" >Conteudo da pagina de usuarios</h4>

       
        <table class="table table-striped">


            <thead>
                <tr>
                    <th>Id</th>
                     <th>Login</th>
                      <th>Senha</th>
                        <th>Email</th>
                          <th>Profissao</th>
                           <th>Endereço</th>
                            <th>Editar</th>
                              <th>Excluir</th>
                </tr>
 </thead>   
           <tr>
		        <td>1</td>
		        <td>coutinho</td>
		        <td>swordfish</td>
		        <td>wernedres@hotmail.com</td>
		        <td>Programador</td>
		        <td>AV: Carlos pereira de melo nº1927</td>
		        <td><a href="#" class="btn btn-info glyphicon glyphicon-list">Editar</a></td>
		        <td><a href="#" class="btn btn-danger  glyphicon glyphicon-trash">Excluir</a></td>
          </tr>
           <tr>
                <td>2</td>
                <td>solange</td>
                <td>mother</td>
                <td>ssolange_coutinho@hotmail.com</td>
                <td>Aposentada</td>
                <td>AV: Carlos pereira de melo nº1927</td>
                <td><a href="#" class="btn btn-info glyphicon glyphicon-list">Editar</a></td>
                <td><a href="#" class="btn btn-danger  glyphicon glyphicon-trash">Excluir</a></td>
            </tr>


            <tr>
                <td>3</td>
                <td>yuliana</td>
                <td>memojin</td>
                <td>yuliana_coutinho@hotmail.com</td>
                <td>Aulixiar Administrativa</td>
                <td>AV: Carlos pereira de melo nº1927</td>
                <td><a href="#" class="btn btn-info glyphicon glyphicon-list">Editar</a></td>
               <td><a href="#" class="btn btn-danger  glyphicon glyphicon-trash">Excluir</a></td>

            </tr>

        </table>

</div>
<?php require_once("footer.php"); ?>
