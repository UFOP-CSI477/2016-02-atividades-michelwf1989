 <?php echo $this->Html->script('jquery-3.1.1', false); ?>
 <?php echo $this->Html->script('jquery.validate', false); ?>

<div class="container well col-sm-6 col-sm-offset-3">		

	<div class="col-sm-12">
		
		<h3 align="center">Cadastro de Usuários</h3>
		<br><br>


		<?php echo $this->Form->create('User', array('controller' => 'users', 'url' => 'cadastro', 'id' => 'cadastro')); ?>
			
			<div class="form-group">
	            <?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nome', 'id' => 'nome'));?>
	        </div>

	        <div class="form-group">
	            <?php echo $this->Form->input('email', array('class' => 'form-control', 'id' => 'email'));?>
	        </div>
			
			<div class="form-group">
	            <?php echo $this->Form->input('type', array( 'id' => 'type', 'value' => 1, 'type' => 'hidden'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Senha', 'id' => 'senha'));?>
	        </div>
			
			<div class="form-group">
	            <?php echo $this->Form->input('cpassword', array('class' => 'form-control', 'label' => 'Confirmação de senha', 'id' => 'cSenha', 'type' => 'password'));?>
	        </div>

			<br>
			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
            </div>

		<?php echo $this->Form->end(); ?>


	</div>
</div>