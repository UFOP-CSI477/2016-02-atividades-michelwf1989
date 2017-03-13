<div class="container well">		
	
	<div class="col-sm-8 col-sm-offset-2" id="conteudo">
		<h3 align="center">Relação de Produtos (Adm3)</h3>
		<br><br>

		<table class="table table-striped table-bordered">
			
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Nome</th>
				<th class="text-center">Preço</th>
				<th class="text-center">Imagem</th>
				<th class="text-center">Editar</th>
			</tr>
			
			<?php foreach ($produtos as $p): ?>

			<tr>
				<td class="text-center">
					<?php echo $p['Produto']['id']; ?>
				</td>

				<td class="text-center">
					<?php echo $p['Produto']['nome']; ?>
				</td>

				<td class="text-center">
					<?php echo $p['Produto']['preco']; ?>
				</td>

				<td class="text-center">
					<?php echo $this->Html->image($p['Produto']['imagem'], array('height' => 100));?>
				</td>
			
				<td class="text-center"> 
					[ <?= $this->Html->link('Editar', array('controller' => 'users', 'action' => 'editarProduto2', $p['Produto']['id'])); ?> ]
				</td>

			</tr>

			<?php endforeach; ?>

		</table>

		<div class="col-sm-6 col-sm-offset-5" >
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