<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>


<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Carrinho",	array('controller' => 'users', 'action' => 'index1')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Historico",	array('controller' => 'users', 'action' => 'historico')); ?>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-2" id="conteudo">

		<div class="col-sm-8">
		<h3 align="center">Editar Perfil</h3>
		<br><br>
		
		<?php echo $this->Form->create('User', array('controller' => 'users', 'url' => 'perfil')); ?>
			
			<div class="form-group">
	            <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nome'));?>
	        </div>

	        <div class="form-group">
	            <?php echo $this->Form->input('email', array('class' => 'form-control'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Senha'));?>
	        </div>
			
			<div class="form-group">
	            <?php echo $this->Form->input('cpassword', array('class' => 'form-control', 'label' => 'Confirmação de senha', 'type' => 'password'));?>
	        </div>

			<br>
			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-lg btn-secondary btn-block login')); ?>
            </div>

		<?php echo $this->Form->end(); ?>		

	</div>
</div>