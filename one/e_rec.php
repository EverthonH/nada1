<?php 

include 'bd.php';

$ID = $_POST['ID'];
$NICK = $_POST['NICK'];
$ID_JOGO = $_POST['ID_JOGO'];


$query = "UPDATE RECRUTAMENTO SET NICK='$NICK', ID_JOGO='$ID_JOGO' WHERE ID = $ID";

// print($query);


mysqli_query($mysqli, $query);

header('location:index.php?pagina=rec');