<?php require_once("header.php"); ?>

<?php require_once("menu.php"); ?>


<?php include_once 'connection.php';

$consulta = pg_query ("SELECT * from contatos;");

echo pg_num_rows($consulta);
echo "asdasdasdasdasdasdasdasdasdasd<br>";
echo "coisa";
echo pg_num_rows($consulta);
echo ($consulta) ? "sim"  : "nao";
echo "chata";

?>





<div id="conteudo">
    <h4 class="alert alert-success">Contatos cadastrados</h4>

    <table>

      <table class="table table-striped">

            <thead>
              <tr class="success">
  

                    <th>Id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Profissao</th>
                    <th>Endereço</th>
  					        <th>Editar</th>
                    <th>Excluir</th>
                </tr>
 </thead>   

           <?php while ($linha = pg_fetch_object($consulta)): ?>

           <tr>

            <td><?php echo $linha->cont_id; ?></td>
            <td><?php echo $linha->cont_nome; ?></td>
            <td><?php echo $linha->cont_telefone; ?></td>
            <td><?php echo $linha->cont_email; ?></td>
            <td><?php echo $linha->cont_profissao; ?></td>
            <td><?php echo $linha->cont_endereco; ?></td>
          <td><?php echo "<a href='contEdit.php?id=$linha->cont_id&nome=$linha->cont_nome&telefone=$linha->cont_telefone&email=$linha->cont_email&profissao=$linha->cont_profissao&endereco=$linha->cont_endereco' class='btn btn-info glyphicon glyphicon-list'>Editar</a>"; ?></td>
          <td><?php echo "<a href='contDelet.php?id=$linha->cont_id' class='btn btn-danger  glyphicon glyphicon-trash'>Excluir</a>"; ?></td>
                    </tr>


       <?php endwhile; ?>

       
        </table>

 <a href="formContato.php" class="btn btn-sm btn-success glyphicon glyphicon-ok"> Novo contato</a>
       

</div>
<?php require_once("footer.php"); ?>
