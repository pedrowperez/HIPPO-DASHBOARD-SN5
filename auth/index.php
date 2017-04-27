<?php 

session_start();
include('../db/index.php');
if (!isset($_SESSION['nomeUsuario'])) {
if(isset($_POST['username']) && 
   isset($_POST['password'])){
	
	$email = str_replace('"','',
			 str_replace("'",'',
			 str_replace(";",'',
			 str_replace("\\",'',
			 $_POST['username']))));        //Proibe " ' ; \ 
	
	$senha = str_replace('"','',
			 str_replace("'",'',
			 str_replace(";",'',
			 str_replace("\\",'',
			 $_POST['password']))));       //Proibe " ' ; \ 
			 
			 
	$query = odbc_exec($db,"SELECT 
	               nomeUsuario,
				   idUsuario, 
				   tipoPerfil
				   FROM Usuario
				   WHERE
				   loginUsuario = '$email'
				   AND
				   senhaUsuario =	
				   '$senha'");

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
}
	
include('index.tpl.php');
?>