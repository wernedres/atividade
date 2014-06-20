

<?php

include 'connection.php';


$consulta = pg_query("SELECT * from usuarios order by user_nome;");
?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>


<div id="conteudo">

<h4 class="alert alert-success">Alunos cadastrados</h4>



        <div class="table table-responsive"      >

           <table class="table table-striped">

   <thead>

                <tr class="success">
    

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                   </thead>
                <?php while ($linha = pg_fetch_object($consulta)):?>
                    <tr> 
                        <td><?php echo $linha->user_id; ?></td>
                        <td><?php echo $linha->user_nome; ?></td>
                        <td><?php echo $linha->user_login; ?></td>
                        <td><?php echo $linha->user_email; ?></td>
                        <td><?php echo $linha->user_telefone; ?></td>
                        <td><?php echo "<a href='userEdit.php?id=$linha->user_id&nome=$linha->user_nome&login=$linha->user_login&email=$linha->user_email&telefone=$linha->user_telefone' class='btn btn-info glyphicon glyphicon-list'>Editar</a>"; ?></td>
                        <td><?php echo "<a href='userDelet.php?id=$linha->user_id' class='btn btn-danger  glyphicon glyphicon-trash'>Excluir</a>"; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
              <a href="userInsert.php" class="btn btn-sm btn-success glyphicon glyphicon-ok"> Novo Aluno</a>
        </div>
</div>

</


<?php require_once("footer.php"); 

