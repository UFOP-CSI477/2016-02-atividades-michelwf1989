<div class="container well">
	<div class="col-sm-2 ">

		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Historico",	array('controller' => 'users', 'action' => 'historico')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Editar Perfil",	array('controller' => 'users', 'action' => 'perfil', $this->Session->read('User')[0]['User']['id'])); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-2" id="conteudo">

		<div class="col-sm-8">
		<h3 align="center">Carrinho de Compras</h3>
		<br><br>

		<form name="cadastro" id="cadastro" method="post" action="regCompra">

			<table class="table table-striped table-bordered">

				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Produto</th>
					<th class="text-center">Valor</th>
					<th class="text-center">Quantidade</th>
				</tr>

				<?php $contador = 0; ?>
				<?php foreach ($produtos as $p): ?>

				<tr>
					<td class="text-center">
						<?php echo $p['Produto']['id'] ; ?>
					</td>

					<td class="text-center">
						<?php echo $p['Produto']['nome'] ; ?>
					</td>

					<td class="text-center">
						<?php echo $p['Produto']['preco'] ; ?>
					</td>

					<td align="center">
						<?php echo $this->Form->input('qtd'. $contador, array('class' => 'form-control', 'label' => false, 'style'=>'width:80px;', 'type' => 'number', 'min' => 1, 'value' => 1));?>
					</td>
					<td class="text-center">
						<?php echo $this->Html->link("remover",	array('controller' => 'users', 'action' => 'removeCarrinho', $p['Produto']['id'])); ?>
					</td>

				</tr>

				<?php $contador++; ?>
				<?php endforeach; ?>

			</table>


			<br>
			<div class="col-sm-12 center-block">
				<input type="submit" value="Comprar" class="btn btn-lg btn-secondary btn-block">
			</div>
		</form>
		</div>

	</div>
</div>
