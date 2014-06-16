<?php
 
$servidor = "localhost";
$port = "5432";
$dbname = "pro_m2";
$usuario ="postgres";
$senha ="m2smart";

$conexao  = pg_connect("host=$servidor port= $port dbname= $dbname user= $usuario password= $senha") or die("Erro ao conectar no banco");
