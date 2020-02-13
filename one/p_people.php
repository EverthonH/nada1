<?php

include 'bd.php';

$NICK = $_POST['NICK'];
$ID_JOGO = $_POST['ID_JOGO'];
$NIVEL = $_POST['NIVEL'];

$query = "INSERT INTO MEMBROS( NICK, ID_JOGO,NIVEL)
VALUES('$NICK', '$ID_JOGO','$NIVEL')";

mysqli_query($mysqli, $query);

header('location:index.php?pagina=membros');
