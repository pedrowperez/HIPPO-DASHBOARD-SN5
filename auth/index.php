<?php 

	$result = odbc_fetch_array($query);	

	if(!empty($result['idUsuario']) &&
	   !empty($result['idUsuario'])){
		
		$_SESSION['idUsuario'] =
		$result['idUsuario'];
		$_SESSION['tipoPerfil'] =
		$result['tipoPerfil'];
		$_SESSION['nomeUsuario'] = 
		$result['nomeUsuario'];
		
		header("location:../menu");
		
	   }else{
			$erro = 'Email ou Senha Incorretos';
	   }	
}
	
include('index.tpl.php');

?>