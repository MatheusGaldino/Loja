<?php
	if(isset($erro))echo "<br><br> $erro";
	if(isset($msg))echo "<br><br> $msg";
?>
<table width="100%" border="1">
	<tr>
		<td>idProduto</td>
		<td>Produto</td>
		<td>Descrição</td>
		<td>Preço</td>
		<td>Categoria</td>
		<td colspan="2"><a href="?acao=incluir">+Incluir novo Produto</a></td>
	</tr>
	
	<?php
		foreach($produtos as $produto){
			echo "<tr>
						<td>{$produto['idProduto']}</td>
						<td>{$produto['nomeProduto']}</td>
						<td>{$produto['descProduto']}</td>
						<td>{$produto['precProduto']}</td>
						<td>{$subresult['nomeCategoria']}</td>
						<td>editar</td>
						<td><a href='?acao=excluir&id={$produto['idProduto']}'>excluir</td>
					</tr>";
		}	
		
	?>
	
	</table>
