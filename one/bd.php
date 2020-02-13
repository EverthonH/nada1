<?php 

$host = "localhost";
$usuario = "everthon_h";
$senha = "eve85265816";
$db = "AQU4TICOS";



$mysqli =mysqli_connect($host, $usuario, $senha, $db);



if($mysqli->connect_errno )
echo "Falha na conexao: (".$mysqli-> connect_errno.")".$mysqli -> connect_error;
	
 $query = "SELECT * FROM JOGOS";
 $con = mysqli_query($mysqli, $query);

   $query = "SELECT * FROM MEMBROS";
 $con_m = mysqli_query($mysqli,$query);

   $query = "SELECT * FROM RECRUTAMENTO";
 $con_r = mysqli_query($mysqli,$query);