<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');

                            
										
											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}
									
                        
		?>
  <div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Atualização de Usuarios <small> Visão Geral</small>
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
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Adicionar novo Usuário
                        </div>
                        <div class="panel-body">
                            <div class="row">
						
                                <div class="col-lg-6">
                                    <form method="post" action="../users/" role="form">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" type="text" name="nome" placeholder="NOME">
                                        </div>
                                        <div class="form-group">
                                            <label>Login</label>
                                            <input class="form-control" type="text" name="login" placeholder="LOGIN">
                                        </div>
										<div class="form-group">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" name="senha" placeholder="SENHA">
                                        </div>
										 <div class="form-group">
                                            <label>Tipo de Usuário</label>
                                            <select name="perfil" class="form-control">
                                                <option value="A">ADMINISTRADOR</option>
                                                <option value="C">CLIENTE</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ativo</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="ativo" checked> ON
                                                </label>
                                            </div>
                                        </div>
	<input type="submit" value="INCLUIR" class="btn btn-primary btn-lg" name="btnNovoUsuario">	
				
                                    </form>
                                </div>
                  
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div></div></div>
 <div class="row">	
	<div class="col-lg-12">
	<div class="panel panel-default">
                        <div class="panel-heading">
                            Gerenciar usuários
                        </div>
						
                        <div class="panel-body">
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
				<td> <a href='?acao=excluir&id={$usuario['idUsuario']}' > Excluir </a></td>
			</tr>";
 }
 ?>
 </table>
 </div>
 </div>
 </div>
 
 <?php


include('../menu/index.footer.tpl.php');

?>