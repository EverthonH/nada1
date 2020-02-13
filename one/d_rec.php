<?php
include 'bd.php';

$ID = $_GET['ID'];

$query = "DELETE FROM RECRUTAMENTO  WHERE ID = $ID";

mysqli_query($mysqli,$query);

header('location:index.php?pagina=rec');