<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<div id="conteudo">

    <h4 class="alert alert-success"> Lista de Cursos disponíveis</h4>

    <table>

      <table class="table table-striped">

            <thead>
     <tr class="success">
    
                    <th>Curso</th>
                    <th>Duração</th>
                    <th>Categoria(a)</th>
                    <th>Professor</th>
                    <th>Qtd Max de alunos</th>
                </tr>
            </thead>   

                
                    <tr>

                        <td>PHP</td>
                        <td>5 meses</td>
                        <td>Programação</td>
                        <td>Felipão</a></td>
                        <td>30</a></td>
                    

                </tr>
                 <tr>

                        <td>Java</td>
                        <td>6 meses</td>
                        <td>Programação</td>
                        <td>Rihanna</a></td>
                        <td>25</a></td>
                    

                </tr>

          <tr>

                        <td>HTML</td>
                        <td>3 meses</td>
                        <td>Programação</td>
                        <td>Hitler</a></td>
                        <td>20</a></td>
                    

                </tr>
        

        
 
        </table>
    <a href="CursoInsert.php" class="btn btn-sm btn-success glyphicon glyphicon-ok"> Novo Curso</a>
    </div>
  
<?php require_once("footer.php"); ?>
