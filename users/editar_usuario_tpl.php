<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');


											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}

?>
<div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Atualizar Usu&#225;rio <small> <?php echo $array_usuario['nomeUsuario']; ?></small>
                        </h1>
                    </div>
                </div>
                <div class="row">
<div class="col-lg-6">
<form method="post" action="../users/">
 										 <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" type="text" value="<?php echo $array_usuario['nomeUsuario']; ?>" name="nome" placeholder="NOME">
                                        </div>
                                          <div class="form-group">
                                            <label>Login</label>
                                            <input class="form-control" value="<?php echo $array_usuario['loginUsuario']; ?>" type="text" name="login" placeholder="LOGIN">
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" name="senha" placeholder="SENHA">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Usu&#225;rio</label>
                                            <select name="perfil" class="form-control">
                                                <?php
				if($array_usuario['tipoPerfil'] == 'A'){
					echo '<option value="A" selected>
							Administrador
							</option>
							<option value="C">
							Cliente
							</option>';
				}else{
					echo '<option value="A">
							Administrador
							</option>
							<option value="C" selected>
							Cliente
							</option>';
				}
				?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sim</label>
                                            
 			<?php
 			if($array_usuario['usuarioAtivo'] == 1){
 				echo '<input type="checkbox" name="ativo" checked>';
 			}else{
 				echo '<input type="checkbox" name="ativo">';
 			}
 			?>

 		<input type="hidden" name="id" value="<?php echo $array_usuario['idUsuario']; ?>">
 		<input type="hidden" name="acao" value="editar">
 		</div>
 		<div class="form-group">
 	<input type="submit" class="btn btn-primary btn-lg" value="Editar" name="btnEditarUsuario">
 	<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';">

 	</div>
</form>
</div></div>
<?php
include('../menu/index.footer.tpl.php');
?>