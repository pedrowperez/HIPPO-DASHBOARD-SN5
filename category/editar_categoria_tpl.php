<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');


											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}

?>
<div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar Categoria <small>
                        </h1>
                    </div>
                </div>
                <div class="row">
<div class="col-lg-6">
<form method="POST" action="../category/">
 										 <div class="form-group">
                                            <label>Categoria</label>
                                            <input class="form-control" type="text" value="<?php echo $array_categoria['nomeCategoria']; ?>" name="nomecategoria" placeholder="CATEGORIA">
                                        </div>
                                          <div class="form-group">
                                            <label>Desconto</label>
                                            <input class="form-control" value="<?php echo $array_categoria['descCategoria']; ?>" type="text" name="desccategoria" placeholder="DESCONTO">
											<input type="hidden" name="acao" value="editar">
											<input type="hidden" name="id" value="<?php echo $idCategoria;?>">
                                        </div>

 		<div class="form-group">
 	<input type="submit" class="btn btn-primary btn-lg" value="Editar" name="btnEditarCategoria">
 	<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';">

 	</div>
</form>
</div></div>
<?php
include('../menu/index.footer.tpl.php');
?>