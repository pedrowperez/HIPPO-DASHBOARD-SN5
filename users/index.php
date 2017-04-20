<?php 
	include ('../db/index.php');
	include ('../auth/controle_de_acesso.php');

		if(isset($_REQUEST['acao'])) {
			switch($acao) {
				case 'excluir';
				 if(is_numeric($_GET['id'])) {
					if(odbc_exec($db, "DELETE FROM
										Usuario
										WHERE
											idUsuario = {$_GET['id']}")) {
						$msg = "USUARIO EXCLUIDO COM SUCESSO";
				 }else {
					 $erro = "ERRO AO EXCLUIR USUÁRIO"; 
				 }
				 
				break;
			}
		}
		}else {
			$q = odbc_exec($db, 'SELECT 
									idUsuario,
									loginUsuario, 
									nomeUsuario, 
									tipoPerfil, 
									usuarioAtivo
								FROM
									Usuario');
		$i = 0;
		while($r = odbc_fetch_array($q)) {
			$usuarios[$i] = $r;
			$i++;
		}

		include ('lista_usuarios.tpl.php');
		}
?>