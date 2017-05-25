<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');


											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}

?>
<div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <?php echo $array_usuario['nomeUsuario']; ?>  <small> </small>
                        </h1>
                    </div>
                </div>
                <div class="row">
<div class="col-lg-6">
<form method="post" action="../users/">
 										 <div class="form-group">
                                            <label>Nome</label>
                                            <p><?php echo $array_usuario['nomeUsuario']; ?></p>
                                        </div>
                                          <div class="form-group">
                                            <label>Login</label>
                                            <p> <?php echo $array_usuario['loginUsuario']; ?></p>
                                        </div>
									
                                        
                                        <div class="form-group">
               
			
		
 		<input type="hidden" name="id" value="<?php echo $array_usuario['idUsuario']; ?>">
 		<input type="hidden" name="acao" value="editar">
 		</div>
 		<div class="form-group">
 	<a href="<?php echo '../users/?acao=editar&id='.$array_usuario['idUsuario']; ?>" > editar </a> 
 	<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';">

 	</div>
</form>
</div></div>
<?php
include('../menu/index.footer.tpl.php');
?>