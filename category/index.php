<?php
include('../auth/controle_de_acesso.php');
include('../db/index.php');
if(isset($_REQUEST['acao'])){
	
	$acao = $_REQUEST['acao'];
	
	switch($acao){
		case 'incluir':
			break;
		case 'excluir':
			if(is_numeric($_GET['id'])){
				if($q = odbc_exec($db, "	DELETE FROM 
										Categoria
									WHERE
										idCategoria = {$_GET['id']}")){
					if(odbc_num_rows($q) > 0){
						$msg = "Categoria exclu&iacute;da com sucesso";
					}else{
						$erro = "Categoria n&atilde;o existe";
					}
				}else{
					$erro = "Erro ao excluir a Categoria";
				}
			}else{
				$erro = "ID inv&aacute;lido";
			}
			
			$q = odbc_exec($db, 'SELECT 
									idCategoria,
									nomeCategoria,
									descCategoria
								FROM
									Categoria');
			$i = 0;							
			while($r = odbc_fetch_array($q)){
				$categorias[$i] = $r;
				$i++;
			
			}
		
			include('categoria.tpl.php');	
					
			break;

		case 'editar':
		
		
		
			$idCategoria = is_numeric($_REQUEST['id']) ? $_REQUEST['id'] : 'NULL';
		
			if(isset($_POST['btnEditarCategoria'])){
				
			echo $idCategoria;
				//trata nome
				
				
				$nome = preg_replace(	"/[^a-zA-Z0-9 ]+/", 
								"", 
								$_POST['nomecategoria']);
								
								
				$desccategoria = preg_replace(	"/[^a-zA-Z0-9 ]+/", 
								"", 
								$_POST['desccategoria']);
		
				
				if(odbc_exec($db, 	"UPDATE 
										Categoria
									SET
										nomecategoria = '$nome',
										desccategoria = '$desccategoria'
									WHERE
										idCategoria = $idCategoria"))
				{
					$msg = "Categoria editada com sucesso";					
				}else
				{
					$erro = "Erro ao editar a Categoria";
				}
			}
		
			$query_categoria
				= odbc_exec($db, "SELECT 
									idCategoria,
									nomeCategoria,
									descCategoria
								FROM
									Categoria
								WHERE
									idCategoria = $idCategoria");
			$array_categoria 
				= odbc_fetch_array($query_categoria);
			
			include('editar_categoria_tpl.php');
				
			break;
		
	
		default:
			$erro = "A&ccedil;&atilde;o inv&aacute;lida";
	}
}else{

	//insere nova categoria
	if(isset($_POST['btnNovaCategoria'])){
		
		$nomeCategoria = $_POST['categoria'];
		$descCategoria = $_POST['desconto'];
						
		if(odbc_exec($db, "	INSERT INTO	Categoria
		
								(nomeCategoria,
								descCategoria)
								
							VALUES
								
								('$nomeCategoria',
								'$descCategoria')"))
		{
			$msg = "Categoria gravada com sucesso";					
		}else{
			$erro = "Erro ao gravar a Categoria";
		}
	}
	
	$q = odbc_exec($db, 'SELECT 
							idCategoria,
							nomeCategoria,
							descCategoria
						FROM
							Categoria');
	$i = 0;							
	while($r = odbc_fetch_array($q)){
		$categorias[$i] = $r;
		$i++;
		}
		include('categoria.tpl.php');
}
?>