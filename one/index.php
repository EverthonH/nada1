<?php


#Base de dados
include 'bd.php';

#cabeçalho 
include 'header.php';

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


#rodapé
include 'footer.php';




