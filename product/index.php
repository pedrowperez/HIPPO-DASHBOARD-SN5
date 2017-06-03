<?php
include('../db/index.php');
include('../auth/controle_de_acesso.php');

ini_set ('odbc.defaultlrl',9000000);


if(isset($_REQUEST['acao'])){
	
	$acao = $_REQUEST['acao'];
	
	switch($acao){
		case 'incluir':
			break;
		case 'excluir':
			if(is_numeric($_GET['id'])){
				if($q = odbc_exec($db, "	DELETE FROM 
										Produto
									WHERE
										idProduto = {$_GET['id']}"))
				{
					if(odbc_num_rows($q) > 0){
						$msg = "Produto adicionado com sucesso";
					}else{
						$erro = "Produto n&atilde;o existe";
					}
				}else{
					$erro = "Erro ao excluir o produto";
				}
			}else{
				$erro = "ID inv&aacute;lido";
			}
			
			$q = odbc_prepare($db, 'SELECT 
									idProduto,
									nomeProduto,
									descProduto,
									precProduto,
									descontoPromocao,
									qtdMinEstoque,
									imagem
								FROM
									Produto
								LIMIT
									?
								OFFSET		
								?');
			$lmt = 10;	
			$offst;
			//TO DO númeroPagina*offst = paginação!!!
			$params = array($lmt, $offst);
			
			odbc_execute($params);
								
			$pager = 	

			
			$i = 0;							
			while($r = odbc_fetch_array($q)){
				$produtos[$i] = $r;
				$i++;
			}
			include('lista_produtos.tpl.php');	
					
			break;

		case 'editar':
		
			$idProduto = is_numeric($_REQUEST['id']) ? $_REQUEST['id'] : 'NULL';
		
			if(isset($_POST['btnEditarProduto'])){
		
				//trata nome
		$nomePr = preg_replace(	"/[^a-zA-Z0-9 ]+/", 
								"", 
								$_POST['nomePr']);
		//trata descrição
		$descPr = preg_replace(	"/[^a-zA-Z0-9 ]+/", 
								"", 
								$_POST['descPr']);
		//trata preço
		$precPr = preg_replace(	"/[^0-9 ]+/", 
								"", 
								$_POST['precPr']);
		//trata desconto
		$descontoPr = preg_replace(	"/[^0-9 ]+/", 
								"", 
								$_POST['descontoPr']);
		//trata estoque
		$qtdMinEs = preg_replace(	"/[^0-9 ]+/", 
								"", 
								$_POST['qtdMinEs']);
				
				if(odbc_exec($db, "	UPDATE 
										Produto
									SET
										nomeProduto = '$nomePr',
										descProduto = '$descPr',
										precProduto = $precPr,
										descontoPromocao = $descontoPr,
										qtdMinEstoque = $qtdMinEs,
										imagem = '$imagemPr'
									WHERE
										idProduto = $idProduto")){
					$msg = "Produto editado com sucesso!";					
				}else{
					$erro = "Erro ao editar o produto!";
				}
				echo odbc_errormsg ($db);
			}
		
			$query_produto
				= odbc_exec($db, 'SELECT 
									idProduto,
									nomeProduto,
									descProduto,
									precProduto,
									descontoPromocao,
									qtdMinEstoque,
									imagem
								FROM
									Produto
								WHERE
									idProduto = '.$idProduto);
			$array_produto 
				= odbc_fetch_array($query_produto);
		
			include('editar_produto_tpl.php');
			
			break;
		
		default:
			$erro = "A&ccedil;&atilde;o inv&aacute;lida";
	}
}else{

	//insere novo produto
	if(isset($_POST['btnNovoProduto'])){
		//trata nome
		$nomePr = $_POST['nomePr'];
		//trata descrição
		$descPr = preg_replace(	"/[^a-zA-Z0-9 ]+/", 
								"", 
								$_POST['descPr']);
		//trata preço
		$precPr = preg_replace(	"/[^0-9 ]+/", 
								"", 
								$_POST['precPr']);
		//trata desconto
		$descontoPr = preg_replace(	"/[^0-9 ]+/", 
								"", 
								$_POST['descontoPr']);
		//trata estoque
		$qtdMinEs = preg_replace(	"/[^0-9 ]+/", 
								"", 
								$_POST['qtdMinEs']);
										
		//inserir imagem	
		if($_FILES['ArquivoUploaded']['size'] > 9000000){
			$base = log($_FILES['ArquivoUploaded']['size']) / log(1024);
			$sufixo = array("", "K", "M", "G", "T");
			$tam_em_mb = round(pow(1024, $base - floor($base)),2).$sufixo[floor($base)];
			$msg_erro = 'Tamanho m&aacute;ximo de imagem 9 Mb. Tamanho da imagem enviada: '.$tam_em_mb;
		}else{
			$msg_erro = 'S&oacute; s&atilde;o aceitos arquivos de imagem. Tamanho da imagem: '.$_FILES['ArquivoUploaded']['size'];
		}		
		
		$file = fopen($_FILES['ArquivoUploaded']['tmp_name'],'rb');
		$fileParaDB = fread($file, filesize($_FILES['ArquivoUploaded']['tmp_name']));
		fclose($file);		
		
		$stmt = odbc_prepare($db,'INSERT INTO
								Produto
								(	nomeProduto,
									descProduto,
									precProduto,
									descontoPromocao,
									qtdMinEstoque,
									imagem)
							VALUES
								(?, ?, ?, ?, ?, ?)');
		if(odbc_execute($stmt, array($nomePr, 
								$descPr,
								$precPr,
								$descontoPr,
								$qtdMinEs,
								$fileParaDB))){								
			$msg = "Produto gravado com sucesso!";		
			
		}else{
			$erro = "Erro ao gravar o produto!";
			
		}
		}
	}

	$q = odbc_exec($db, 'SELECT 
									idProduto,
									nomeProduto,
									descProduto,
									precProduto,
									descontoPromocao,
									qtdMinEstoque,
									imagem
								FROM
									Produto');

									
	$i = 0;							
	while($r = odbc_fetch_array($q)){
		$produtos[$i] = $r;
		$i++;
	}
	include('lista_produtos.tpl.php');
}











?>