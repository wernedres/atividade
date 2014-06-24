<?php require_once("header.php"); ?>

<?php require_once("menu.php"); ?>


<?php include_once 'connection.php';

$consulta = pg_query ("SELECT * from usuarios order by usuario;");

?>




<div id="conteudo">

<h4 class="alert alert-success">Usuarios cadastrados</h4>



        <div class="table table-responsive"      >

           <table class="table table-striped">

   <thead>

                <tr class="success">
    

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Senha</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                   </thead>
                <?php while ($linha = pg_fetch_object($consulta)):?>
                    <tr> 
                        <td><?php echo $linha->id; ?></td>
                        <td><?php echo $linha->usuario; ?></td>
                        <td><?php echo $linha->senha; ?></td>
                      
                        <td><?php echo "<a href='userEdit.php?id=$linha->id&usuario=$linha->usuario&senha=$linha->senha' class='btn btn-info glyphicon glyphicon-list'>Editar</a>"; ?></td>
                        <td><?php echo "<a href='userDelet.php?id=$linha->id' class='btn btn-danger  glyphicon glyphicon-trash'>Excluir</a>"; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
              <a href="formUsuario.php" class="btn btn-sm btn-success glyphicon glyphicon-ok"> Novo Usuario</a>
        </div>
</div>

</


<?php require_once("footer.php"); 

