<?php


#Base de dados
include 'bd.php';

#cabeçalho 
include 'header.php';
session_start();

#verificacao do login
if (!isset($_SESSION['usuario'])) {
	header('location: login/homelogin.php');
	exit();
}


# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}
switch($pagina){
	case 'jogos': include 'views/jogos.php'; break;
	case 'membros': include 'views/membros.php'; break;
	case 'rec': include 'views/rec.php'; break;
	case 'new_game': include 'views/new_game.php'; break;
	case 'new_people': include 'views/new_people.php'; break;
	case 'new_rec': include 'views/new_rec.php'; break;
	default: include 'views/home.php'; break;
}


include 'footer.php';




