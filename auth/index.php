<?php 
session_start();
include('../db/index.php');

if(isset($_POST['email']) && 
   isset($_POST['senha'])){
	
	$email = str_replace('"','',
			 str_replace("'",'',
			 str_replace(";",'',
			 str_replace("\\",'',
			 $_POST['email']))));        //Proibe " ' ; \ 
	
	$senha = str_replace('"','',
			 str_replace("'",'',
			 str_replace(";",'',
			 str_replace("\\",'',
			 $_POST['senha']))));       //Proibe " ' ; \ 
			 
			 
	$query = odbc_exec($db,"SELECT 
	               nomeUsuario,
				   idUsuario, 
				   tipoPerfil
				   FROM Usuario
				   WHERE
				   loginUsuario = '$email'
				   AND
				   senhaUsuario =	
				   HASHBYTES('SHA1','$senha')");
?>