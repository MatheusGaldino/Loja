<html>
	<head>
		<title>Exemplos Loja Virtual</title>
	</head>
	<body>
		<center>
			<br><br>
			<?php if(isset($erro))echo "<font color='red'>$erro</font>";?>
			<br><br>
			<form method="POST">
				E-mail: <input type ="text" name="email"><br><br>
				Senha: <input type="password" name="senha"><br><br>
				<input type="submit" value="entrar">
				
				
				
			</form>
	
		</center>
	</body>


</html>