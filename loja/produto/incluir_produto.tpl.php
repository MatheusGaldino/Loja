<form method="post" action="../produto">
	Nome do produto: <input type="text" name="nome"><br>
	Descrição: <textarea name="desc"></textarea><br>
	Preço: <input type="text" name="preco"><br><br>
	Desconto: <input type="text" name="desconto"><br><br>
	Categoria: <select>
				<option Value="A">Administrador</option>
				<option Value="C">Cliente</option>
			</select><br>
	Quantidade em estoque: <input type="text" name="estoque"><br><br>
	Imagem: <input type="file" name="imagem"><br><br>
	Ativo: <input type="radio" name="ativo" checked><br><br>
	<input type="submit" value="Gravar" name="btnNovoProduto">
</form>



<?php
	echo $_POST['ativo'];
	
	include('../menu/index.footer.tpl.php');
?>