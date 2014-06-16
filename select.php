
<?php 


$professores=array(
	1=> 'Felipe',
	2=> 'Coutinho',
	3=>'Walter',
	4=>'Cassio' );

	foreach ($professores as $key => $value) {
		print $key."___".$value."___<br>";
	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Teste select</title>
</head>
	<body>
		<div> voce escolheu <?php echo $_GET['numeros']; ?> meses </div>
		<fieldset>
			<legend>Teste de Select</legend>
			<form>
				<label>Numeros</label>
				<select name="numeros"> 
					
					<?php for($i=1;$i<=100;$i++){

							echo "<option value=''>        ". $i ." mes      </option>" ;

							
						} ?>

				</select>
				<input type="submit" value="Enviar"/>
			</form>
		</fieldset>
	</body>
</html>





	





