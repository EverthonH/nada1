<?php 

include 'bd.php';

$ID = $_POST['ID'];
$NOME = $_POST['NOME'];
$TIPO = $_POST['TIPO'];


$query = "UPDATE JOGOS SET NOME='$NOME', TIPO='$TIPO' WHERE ID = $ID";

// print($query);


mysqli_query($mysqli, $query);

header('location:index.php?pagina=jogos');