<?php
session_start();

include('../db/index.php');

if(isset($_POST['email']) && isset($_POST['senha'])){
	
	$email =	str_replace('"','',
				str_replace("'",'',
				str_replace(';','',
				str_replace("\\",'',
				$_POST['email']))));	
	
	$senha =	str_replace('"','',
				str_replace("'",'',
				str_replace(';','',
				str_replace("\\",'',
				$_POST['senha']))));

	$query = odbc_exec($db, "SELECT 
							nomeUsuario, idUsuario, tipoPerfil FROM USUARIO
							WHERE 
							loginUsuario = '$email' 
							AND
							senhaUsuario = HASHBYTES('SHA1','$senha')");
										//hashbytes é o comando sql para criptografar o dado
	 	
	$result = odbc_fetch_array($query);
	//fetch array grava os arquivos carregados do banco em um array
	
	if  (!empty($result['idUsuario']) && !empty($result['tipoPerfil'])){
		$_SESSION['nomeUsuario'] = $result['nomeUsuario'];
		$_SESSION['tipoPerfil'] = $result['tipoPerfil'];
		$_SESSION['idUsuario'] = $result['idUsuario']; 
		header('Location: ../menu/');
		
		
	}else{
		$erro = 'Email ou senha incorretos';
	} 

}

include('index.tpl.php');






?>