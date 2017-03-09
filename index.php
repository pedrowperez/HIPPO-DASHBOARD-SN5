<?php 

$msg = null;

if(isset($_POST['login'])) {
		if( 	$_POST['login'] == 'admin' &&
				$_POST['senha'] == 'password') {
					$msg = 'BEM-VINDO';
				}else {
					$msg = 'USUÁRIO OU SENHA INCORRETOS';
				}
}

include_once('index.tpl.php');
?>