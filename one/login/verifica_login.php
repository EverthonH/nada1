<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: homelogin.php.php');
	exit();
}