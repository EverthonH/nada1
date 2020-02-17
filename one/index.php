<?php
session_start();
include('conexao.php');


if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: indexl.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: header.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: indexl.php');
	exit();
}

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
	default: include 'indexl.php'; break;
}


#rodapé
include 'footer.php';




