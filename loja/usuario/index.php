<?php
	include('../menu/index.header.tpl.php');
	include('../menu/index.body.tpl.php');
	include('../db/index.php');

	
	
	
	
	
	
if(isset($_GET['acao'])){	
	if($_GET['acao'] = "incluir"){
		include('incluir_usuario.tpl.php');
	}
}else{

	if(isset($_REQUEST['acao'])){ 
	$acao = $_REQUEST['acao'];
	
		switch($acao) {
			case 'excluir':
				if(is_numeric($_GET['id'])){
					if(odbc_exec($db, " DELETE from Usuario WHERE idUsuario = {$_GET['id']}")){
						if(odbc_num_rows($q) > 0){
							$erro= "usuario excluido com sucesso";
						}else{
							$erro = "Usuario não existe";
						}
					}else{
						$erro = "Erro ao excluir o usuario";
					}
				}else{
					$erro = "ID inválido";
				}
		}	
	}else{
		
		if(isset($_POST['btnNovoUsuario'])){
			//trata email
			$nome = preg_replace("/[^a-zA-Z0-9]+/", "", $_POST['nome']);
			$email_exploded = explode ('@', $_POST['login']);
			$email_comeco = preg_replace ("/[a-z0-9._+-]+/i", $email_exploded[1], $_POST['login']);
			$email_fim = preg_replace ("/[a-z0-9._+-]+/i", $email_exploded[1], $_POST['login']);
			$email = "$email_exploded.@.$email_fim";
			
			//trata senha
			$password = str_replace('"','',$_POST['senha']);
			$password = str_replace("'",'',$_POST['senha']);
			$password = str_replace(';','',$_POST['senha']);
			
			//trata perfil
			$perfil = $_POST[perfil] != 'A' && $_POST[perfil] != 'C' ? 'C' : $_POST['perfil'];
			
			//trata ativo
			$ativo = (bool) $_POST['ativo']; 
			
			if(odbc_exec($db, "INSERT into Usuario (loginUsuario, 
													senhaUsuario, 
													nomeUsuario, 
													tipoPerfil, 
													usuarioAtivo) 
											VALUES 
													($email, 
													HASHBYTES('SHA1', '$password'), 
													$nome, 
													$perfil, 
													$ativo)")) {
				$msg = "Usuario cadastrado com sucesso";
				
			}else {
				$erro = "Erro ao gravar usuario";
			}
	
	
	
		}
	
		$q = odbc_exec($db, " SELECT 
								idUsuario, 
								loginUsuario, 
								nomeUsuario, 
								tipoPerfil, 
								usuarioAtivo
								
								FROM Usuario ");
		
		$i = 0;
		while ($result = odbc_fetch_array($q)){
			$usuarios[$i] = $result;
		$i++;	
		}
		
	}
	
	include('index.tpl.php');	
}
include('../db/select_db.php');

?>
	