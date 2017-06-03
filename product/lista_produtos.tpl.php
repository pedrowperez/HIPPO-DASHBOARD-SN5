<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');





                            
										
											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}
									
                        
		?>
  <div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gerenciamento de Produtos <small> Vis&atilde;o Geral</small>
                        </h1>
                    </div>
                </div>
 <div class="row">	
	<div class="col-lg-12">
	<div class="panel panel-default">
                        <div class="panel-heading">
                            Gerenciar produtos
                        </div>
						
                        <div class="panel-body">
<table class="table table-hover table-striped">
			<thead>
				<th> ID</th>
				<th> Imagem</th>
				<th> Nome</th>
				<th> Descri&ccedil;&atilde;o</th>
				<th> Pre&ccedil;o</th>
				<th> Desconto </th>
				<th> Estoque </th>
				<th> </th>
				<th> </th>
			</thead>
<?php

if($_SESSION['tipoPerfil'] == 'A'){
	foreach ($produtos as $produto) {
 $conteudo_base64 = base64_encode($produto['imagem']);
 
 
	echo "<tr>
				<td>{$produto['idProduto']} </td>
				<td><img src=\"data:image/jpeg;base64,".$conteudo_base64."\" width='100px'> </td>
				<td>{$produto['nomeProduto']}</td>
				<td> ".substr($produto['descProduto'],0,40);
	
	if(strlen($produto['descProduto']) > 40){
	
		echo "<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#".substr($produto['idProduto'],0,3)."' aria-expanded='false' aria-controls='collapseExample'>
						ver mais
						</button>
						<div class='collapse' id='".substr($produto['idProduto'],0,3)."'>
						<div class='well'>
						".substr($produto['descProduto'],40)."
						</div>";
						
	}
	
	echo "</td>    
				<td> ".number_format($produto['precProduto'],2,",",".");"</td>
				<td> ".number_format($produto['descontoPromocao'],1);"</td> 
				<td> {$produto['qtdMinEstoque']}</td>
				<td><a href='?acao=editar&id={$produto['idProduto']}'><i class='fa fa-edit'></i></a></td>
				<td> <a href='?acao=excluir&id={$produto['idProduto']}' ><i class='fa fa-times'></i></a></td>
			</tr>";
 
	} echo "<button class='btn btn1 btn-lg' data-toggle='modal' data-target='#myModal'>
                               <i class='fa fa-user'></i> Adicionar novos produtos
                            </button>
                            <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='myModalLabel'>Adicionar novo Produto</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action='../users/' role='form'>
                                        <div class='form-group'>
                                            <label>Nome</label>
                                            <input class='form-control' type='text' name='nome' placeholder='Nome'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Descri&ccedil;&atilde;o</label>
                                            <input class='form-control' type='text' name='login' placeholder='Descri&ccedil;&atilde;o'>
                                        </div>
										<div class='form-group'>
                                            <label>Pre&ccedil;o</label>
                                            <input type='number' class='form-control' name='preco' placeholder='Pre&ccedil;o'>
                                        </div>
										
										<div class='form-group'>
                                            <label>Desconto</label>
                                            <input class='form-control' type='number' name='login' placeholder='Desconto'>
                                        </div>
										
										<div class='form-group'>
                                            <label>Estoque</label>
                                            <input class='form-control' type='number' name='login' placeholder='Estoque'>
                                        </div>
																						
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
                                            <input type='submit' value='Incluir' class='btn btn-primary btn-lg' name='btnNovoUsuario'>	
                                            
                                        </div>
                                            </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>";
				}
				else{
					 foreach ($produtos as $produto) {
		$conteudo_base64 = base64_encode($produto['imagem']);
	 echo "<tr>
				<td>{$produto['idProduto']} </td>
				<td><img src=\"data:image/jpeg;base64,".$conteudo_base64."\" width='100px'> </td>
				<td>{$produto['nomeProduto']}</td>
				<td> {$produto['descProduto']}</td>
				<td> {$produto['precProduto']}</td>
				<td> {$produto['descontoPromocao']}</td>
				<td> {$produto['qtdMinEstoque']}</td>
				
				<td></td>
				<td></td>
			</tr>";
	
 
	 
 }
				}


 ?>
 </table>
                           
 </div>
 </div>                           


 <?php


include('../menu/index.footer.tpl.php');

?>