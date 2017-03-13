<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Editar Perfil", array('controller' => 'users', 'action' => 'perfil', $this->Session->read('User')[0]['User']['id'])); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Carrinho",	array('controller' => 'users', 'action' => 'index1')); ?>
			</li>
		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h3 align="center">Relação de Compras Efetuadas</h3>
		<br><br>

		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Produto</th>
				<th class="text-center">Quantidade</th>
				<th class="text-center">Data</th>
				<th class="text-center">Valor</th>
			</tr>
	
			<?php foreach ($registros as $r): ?>

			<tr>
				<td class="text-center">
					<?php echo $r['Compra']['id']; ?>
				</td>

				<td class="text-center">
					<?php echo $r['Produto']['nome']; ?>
				</td>

				<td class="text-center">
					<?php echo $r['Compra']['quantidade']; ?>
				</td>
				
				<td class="text-center">
					<?php echo $r['Compra']['data']; ?>
				</td>
				
				<td class="text-center">
					<?php 
						$valor = $r['Produto']['preco'] * $r['Compra']['quantidade'];
						echo $valor; 
					?>
				</td>

			</tr>

			<?php endforeach; ?>

		</table>
		

		<div class="col-sm-10 col-sm-offset-2" >
			<div class="pagination pagination-large">
                <ul class="pagination">            

                    <?php echo $this->Paginator->prev('prev', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                    <?php echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?>
                    <?php echo $this->Paginator->next('next', array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
            
                </ul>
            </div>
		</div>

	</div>

</div>