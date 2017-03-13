<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>


<div class="container well">
	<div class="col-sm-2 ">

		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Relação de Produtos", array('controller' => 'users', 'action' => 'index3')); ?>
			</li

		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h1 align="center">Editar Produtos</h1>


		<?php echo $this->Form->create('Produto'); ?>

			<div class="form-group">
	            <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
	        </div>

			<!-- edição de nome travado -->
			<div class="form-group">
	            <?php echo $this->Form->input('nome', array('class' => 'form-control', 'readonly' => 'true'));?>
	        </div>
	        <!-- edição de nome travado -->

			<div class="form-group">
	            <?php echo $this->Form->input('preco', array('class' => 'form-control'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('imagem', array('class' => 'form-control'));?>
	        </div>

			<br>
			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Salvar Alterações', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
            </div>

        <?php echo $this->Form->end(); ?>


	</div>

</div>
