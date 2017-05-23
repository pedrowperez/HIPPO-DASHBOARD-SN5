<?php
include('../db/index.php');
include('../auth/controle_de_acesso.php');



			$query_usuario
				= odbc_exec($db, 'SELECT 
									idUsuario,
									loginUsuario,
									nomeUsuario,
									tipoPerfil,
									usuarioAtivo
								FROM
									Usuario
								WHERE
									idUsuario = '.$_SESSION['idUsuario']);
			$array_usuario 
				= odbc_fetch_array($query_usuario);
		
			include('../profile/profile.tpl.php');

?>

