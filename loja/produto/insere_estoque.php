<?php	
	$nome = $_POST['nome'];
	$descricao = $_POST['desc'];
	$preco = $_POST['preco'];
	$categoria = $_POST['desconto'];
	$desconto = $_POST[''];
	$ativo = $_POST[''];
	$usuario = $_POST[''];
	$estoque = $_POST['estoque'];
	//$imagem = $_POST[''];
	
	
	function ($db){
		odbc_exec($db, " SELECT idCategoria, nomeCategoria FROM Categoria")
	}
	
	
	odbc_exec($db, " INSERT into Produto	(nomeProduto, 
											descProduto, 
											precProduto,
											idCategoria, 
											descontoPromocao, 
											ativoProduto, 
											idUsuario, 
											qtdMinEstoque, 
											imagem)								
										VALUES ($nome, 
												$descricao, 
												$preco, 
												$categoria, 
												$desconto, 
												$ativo, 
												$usuario, 
												$estoque
												)");
						
include ('incluirprod.tpl.php')

?>