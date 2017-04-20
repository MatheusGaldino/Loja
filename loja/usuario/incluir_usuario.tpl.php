<?php
	include('../menu/index.header.tpl.php');
	include('../menu/index.body.tpl.php');
?>

<form method="post" action="../usuario">
	Nome: <input type="text" name="nome"><br>
	E-mail: <input type="email" name="login"><br>
	Senha: <input type="password" name="senha"><br><br>
	Perfil: <select>
				<option Value="A">Administrador</option>
				<option Value="C">Cliente</option>
			</select><br>
	Ativo: <input type="radio" name="ativo" checked><br><br>
	<input type="submit" value="Gravar" name="btnNovoUsuario">
</form>



<?php
	echo $_POST['ativo'];
	
	include('../menu/index.footer.tpl.php');
?>