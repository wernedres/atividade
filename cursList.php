

<?php require_once("header.php"); ?>

<?php require_once("menu.php"); ?>


<?php require_once ("connection.php"); 


   

?>


<div id="conteudo">

    <h4 class="alert alert-success"> Lista de Cursos disponíveis</h4>

    <table>

      <table class="table table-striped">

            <thead>
     <tr class="success">
    
                     <th>ID</th>
                    <th>Curso</th>
                    <th>Duração</th>
                    <th>Categoria(a)</th>
                    <th>Professor</th>
                    <th>Qtd Max de alunos</th>
                     <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>   


              <?php 
               
                $consulta = pg_query ("SELECT * from curso order by curs_nome;");

               while ($linha = pg_fetch_object($consulta)): 

               $idDaCategoria = $linha->curs_categoria; 
               $consultaCategoria = pg_query ("SELECT * from Categoria where cate_id =$idDaCategoria;");
               $linhaCategoria = pg_fetch_object($consultaCategoria); 

                
               $idDoProfessor = $linha->curs_professor; 
               $consultaProfessor = pg_query ("SELECT * from professor where prof_id =$idDoProfessor;");
               $linhaProfessor = pg_fetch_object($consultaProfessor); 

                


                ?>
 

                
            <tr>


            <td><?php echo $linha->curs_id; ?></td>
            <td><?php echo $linha->curs_nome; ?></td>
            <td><?php echo $linha->curs_duracao; ?></td>
            <td><?php echo $linhaCategoria->cate_nome; ?></td>
            <td><?php echo $linhaProfessor->prof_nome; ?></td>
            <td><?php echo $linha->curs_qtdaluno; ?></td>   
            <td><?php echo "<a href='cursEdit.php?id=$linha->curs_id&nome=$linha->curs_nome&duracao=$linha->curs_duracao&categorias=$linhaCategoria->cate_nome&qtdAluno=$linha->curs_qtdaluno' class='btn btn-info glyphicon glyphicon-list'>Editar</a>"; ?></td>



          <td><?php echo "<a href='cursDelet.php?id=$linha->curs_id' class='btn btn-danger  glyphicon glyphicon-trash'>Excluir</a>"; ?></td>
                       
               
                </tr>
           <?php endwhile; ?>

        
 
        </table>
    <a href="cursInsert.php" class="btn btn-sm btn-success glyphicon glyphicon-ok"> Novo Curso</a>
    </div>
  
<?php require_once("footer.php"); ?>
