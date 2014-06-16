<?php require_once("header.php"); ?>

<?php require_once("menu.php"); ?>


<?php include_once 'connection.php';

$consulta = pg_query ("SELECT * from professor order by prof_nome;");
?>





<div id="conteudo">
    <h4 class="alert alert-success">Professores cadastrados</h4>

    <table>

      <table class="table table-striped">

            <thead>
              <tr class="success">
  

                    <th>Id</th>
                    <th>Nome</th>
                   	<th>Editar</th>
                    <th>Excluir</th>
                </tr>
 </thead>   

           <?php while ($linha = pg_fetch_object($consulta)): ?>

           <tr>

            <td><?php echo $linha->prof_id; ?></td>
            <td><?php echo $linha->prof_nome; ?></td>
           
          <td><?php echo "<a href='profEdit.php?id=$linha->prof_id&nome=$linha->prof_nome' class='btn btn-info glyphicon glyphicon-list'>Editar</a>"; ?></td>
          <td><?php echo "<a href='profDelet.php?id=$linha->prof_id' class='btn btn-danger  glyphicon glyphicon-trash'>Excluir</a>"; ?></td>
                    </tr>


       <?php endwhile; ?>

       
        </table>

 <a href="formContato.php" class="btn btn-sm btn-success glyphicon glyphicon-ok"> Novo contato</a>
       

</div>
<?php require_once("footer.php"); ?>
