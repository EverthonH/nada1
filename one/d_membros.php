<?php
include 'bd.php';

$ID = $_GET['ID'];

$query = "DELETE FROM MEMBROS  WHERE ID = $ID";

mysqli_query($mysqli,$query);

header('location:index.php?pagina=membros');