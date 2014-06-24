<?php 


include 'connection.php';

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];



if(isset($_POST['acao'])&& $_POST['acao']== "cadUser"){


	if($usuario == "" && $senha == ""){


		echo "<script>alert('Os campos nao podem ficar vazio')</script>";
	}else{

$inserirRegistro = pg_query("INSERT into usuarios (usuario,senha)values('$usuario','$senha')");
      if (pg_num_rows($inserirRegistro)=>1) {
        	echo "<script>alert('Já existe usuario com esse login')</script>";

        }  
      
   }else{
   echo "<script>alert('cadastro realizado com sucesso')</script>";


   }
    
}


    
 ?>