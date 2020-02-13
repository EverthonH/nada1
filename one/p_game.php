<?php

include 'bd.php';

$NOME = $_POST['NOME'];
$TIPO = $_POST['TIPO'];

$query = "INSERT INTO JOGOS( NOME, TIPO)
VALUES('$NOME', '$TIPO')";

mysqli_query($mysqli, $query);

header('location:index.php?pagina=jogos');
?>