
<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/comum.css">
    <title>AQU4TICOS</title>
</head>
<body>
    <header>
        <div class="usua"> 
            <img src="img/usuario.png"  class="imgu">
            <p class="usu"> <?php echo $_SESSION['usuario'];?></p>
       </div>
        <div class="container">
            <a href="/"><img src="img/Logol.png" id="logo"></a>

            <div id="menu">
                <a href="?pagina=jogos">Jogos</a>
                <a href="?pagina=membros">Membros</a>
                <a href="?pagina=rec">Recrutamento</a>
                <a href="login/logout.php">Sair</a>
                
            </div>

        </div>

    </header>

    <div id="conteudo" class="container">
