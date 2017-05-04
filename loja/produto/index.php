<?php
	include('../menu/index.header.tpl.php');
	include('../menu/index.body.tpl.php');
	include('../db/index.php');
	
	$q = odbc_exec($db, " SELECT 
								idProduto, 
								nomeProduto, 
								descProduto, 
								precProduto,
								idCategoria								
								FROM Produto ");
		
		$i = 0;
		while ($result = odbc_fetch_array($q)){
			$produtos[$i] = $result;
			
			$idCateg = $result['idCategoria'];
                $subquery = odbc_exec($db, "SELECT * FROM Categoria WHERE idCategoria=$idCateg");
                $subresult = odbc_fetch_array($subquery);
				
		$i++;	
		}
		
		
	if(isset($_GET['acao'])){	
		if($_GET['acao'] = "incluir"){
			include('incluir_produto.tpl.php');
		}
	
	}else{		
	if(isset($_GET['acao'])){
		$acao = $_GET['acao'];
		switch($acao) {
				case 'excluir':
					if(is_numeric($_GET['id'])){
						if(odbc_exec($db, " DELETE from Produto WHERE idProduto = {$_GET['id']}")){
							if(odbc_num_rows($q) > 0){
								$erro= "Produto excluido com sucesso";
							}else{
								$erro = "Produto não existe";
							}
						}else{
							$erro = "Erro ao excluir o Produto";
						}
					}else{
						$erro = "ID inválido";
					}
		}
	}else{
		include('index.tpl.php');	
	}
}
?>