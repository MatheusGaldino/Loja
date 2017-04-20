<?php
	session_start();
	if(!isset($_SESSION['idUsuario']) || !isset($_SESSION['nomeUsuario']) || !isset($_SESSION['tipoPerfil'])){
	
	session_destroy();
	header('Location: /loja');
	exit();
	}
?>