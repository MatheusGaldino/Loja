<?php
	if(isset($erro))echo "<br><br> $erro";
	if(isset($msg))echo "<br><br> $msg";
?>
<table width="100%" border="1">
	<tr>
		<td>Id Usuario</td>
		<td>Login</td>
		<td>Nome</td>
		<td>Perfil</td>
		<td>Ativo</td>
		<td colspan="2"><a href="?acao=incluir">+Incluir novo Usuario</a></td>
	</tr>
	
	<?php
		foreach($usuarios as $usuario){
			echo "<tr>
						<td>{$usuario['idUsuario']}</td>
						<td>{$usuario['loginUsuario']}</td>
						<td>{$usuario['nomeUsuario']}</td>
						<td>{$usuario['tipoPerfil']}</td>
						<td>{$usuario['usuarioAtivo']}</td>
						<td>editar</td>
						<td><a href='?acao=excluir&id={$usuario['idUsuario']}'>excluir</td>
					</tr>";
		}	
		
	?>
	
	</table>