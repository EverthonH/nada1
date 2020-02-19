<?php
define('HOST', 'localhost');
define('USUARIO', 'everthon_h');
define('SENHA', 'eve85265816');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
