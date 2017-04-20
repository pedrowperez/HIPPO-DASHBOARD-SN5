<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');

?>
  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Atualização de Usuarios <small>Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Gerenciamento de Usuarios
                            </li>
                        </ol>
                    </div>
                </div>
 <div class="row">	
	<div class="col-lg-12">
<table class="table table-hover table-striped">
			<thead>
				<th> ID</th>
				<th> Login</th>
				<th> Nome</th>
				<th> Perfil</th>
				<th> Ativo </th>
				<th> </th>
				<th> </th>
			</thead>

<?php

 foreach ($usuarios as $usuario) {
	 echo "<tr>
				<td>{$usuario['idUsuario']} </td>
				<td>{$usuario['loginUsuario']}</td>
				<td> {$usuario['nomeUsuario']}</td>
				<td> {$usuario['tipoPerfil']}</td>
				<td> {$usuario['usuarioAtivo']}</td>
				<td> Editar</td>
				<td> <a href='?acao=excluir&id={$usuario['idUsuario']}'> Excluir </a></td>
			</tr>";
 }
 ?>
 </table>
 </div>
 </div>
 
 <?php


include('../menu/index.footer.tpl.php');

?>