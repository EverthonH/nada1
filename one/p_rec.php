<?php

include 'bd.php';

$NICK = $_POST['NICK'];
$ID_JOGO = $_POST['ID_JOGO'];

$query = "INSERT INTO RECRUTAMENTO( NICK, ID_JOGO)
VALUES('$NICK', '$ID_JOGO')";

mysqli_query($mysqli, $query);

header('location:index.php?pagina=rec');
