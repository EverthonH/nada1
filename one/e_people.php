<?php 

include 'bd.php';

$ID = $_POST['ID'];
$NICK = $_POST['NICK'];
$ID_JOGO = $_POST['ID_JOGO'];
$NIVEL = $_POST['NIVEL'];



$query = "UPDATE MEMBROS SET NICK='$NICK', ID_JOGO='$ID_JOGO', NIVEL='$NIVEL' WHERE ID = $ID";

// print($query);


mysqli_query($mysqli, $query);

header('location:index.php?pagina=membros');
