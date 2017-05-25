<?php
include('../menu/index.head.tpl.php');
include('../menu/index.body.tpl.php');


                            
										
											if(isset($msg)){echo "<div class='alert alert-success'> $msg </div>";}
										 
											if(isset($erro)){echo "<div class='alert alert-danger'> $erro </div>";}
									
                        
		?>
  <div class="row">
  
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gerenciamento de Categoria <small> Vis&atilde;o Geral</small>
                        </h1>
                    </div>
                </div>
 <div class="row">	
	<div class="col-lg-12">
	<div class="panel panel-default">
                        <div class="panel-heading">
                            Gerenciar Categoria
                        </div>
						
                        <div class="panel-body">
<table class="table table-hover table-striped">
			<thead>
				<th> ID</th>
				<th> Categorias</th>
				<th> Desconto</th>
			</thead>

<?php
if($_SESSION['tipoPerfil'] == 'A'){
					 foreach ($categorias as $categoria) {
	 
	 echo "<tr>
				<td>{$categoria['idCategoria']} </td>
				<td>{$categoria['nomeCategoria']}</td>
				<td> {$categoria['descCategoria']}</td>
				<td><a href='?acao=editar&id={$categoria['idCategoria']}'><i class='fa fa-edit'></i></a></td>
				<td> <a href='?acao=excluir&id={$categoria['idCategoria']}' ><i class='fa fa-times'></i> </a></td>
			</tr>
			";
	
 }
	echo "<button class='btn btn1 btn-lg' data-toggle='modal' data-target='#myModal'>
                               <i class='fa fa-user'></i> Adicionar nova Categoria
                            </button>
                            <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='myModalLabel'>Adicionar nova Categoria</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <form method='post' action='../category/' role='form'>
                                        <div class='form-group'>
                                            <label>CATEGORIA</label>
                                            <input class='form-control' type='text' name='categoria' placeholder='CATEGORIA'>
                                        </div>
                                        <div class='form-group'>
                                            <label>Desconto</label>
                                            <input class='form-control' type='text' name='desconto' placeholder='Desconto'>
                                        </div>
										
                                            
	
				
                                    
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
                                            <input type='submit' value='Incluir' class='btn btn-primary btn-lg' name='btnNovaCategoria'>	
                                            
                                        </div>
                                            </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>";
				}else{
					 foreach ($categorias as $categoria) {
	 
		echo "<tr>
				<td>{$categoria['idCategoria']} </td>
				<td>{$categoria['nomecategoria']}</td>
				<td> {$categoria['desccategoria']}</td>
			</tr>";
	
 
	 
 }
				}


 ?>
 </table>
                           
 </div>
 </div>

         
                            
 </div>


 <?php


include('../menu/index.footer.tpl.php');

?>