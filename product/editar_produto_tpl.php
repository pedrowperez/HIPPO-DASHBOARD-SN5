<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');


											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}

?>
<div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Atualizar Produto<small> <?php echo $array_produto['nomeProduto']; ?></small>
                        </h1>
                    </div>
                </div>
                <div class="row">
<div class="col-lg-6">
<form method="post" action="../product/">
 										 <div class="form-group">
                                            <label>Nome do Produto</label>
                                            <input class="form-control" type="text" value="<?php echo $array_produto['nomeProduto']; ?>" name="nomePr">
                                        </div>
                                          <div class="form-group">
                                            <label>Descrição</label>
                                            <input class="form-control" value="<?php echo $array_produto['descProduto']; ?>" type="text" name="descPr">
                                        </div>
                                        <div class="form-group">
                                            <label>Preço</label>
                                            <input type="text" class="form-control" value="<?php echo $array_produto['precProduto']; ?>" type="text" name="precPr" >
                                        </div>
										<div class="form-group">
                                            <label>Desconto</label>
                                            <input type="text" class="form-control" value="<?php echo $array_produto['descontoPromocao']; ?>" type="text" name="descontoPr">
                                        </div>
										<div class="form-group">
                                            <label>Quantidade em Estoque</label>
                                            <input type="text" class="form-control" value="<?php echo $array_produto['qtdMinEstoque']; ?>" type="text" name="qtdMinEs">
                                        </div>
 		<div class="form-group">
 	<input type="submit" class="btn btn-primary btn-lg" value="Editar" name="btnEditarProduto">
 	<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';">

 	</div>
</form>
</div></div>
<?php
include('../menu/index.footer.tpl.php');
?>