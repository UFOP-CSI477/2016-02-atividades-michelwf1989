<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>


<div class="container well col-sm-6 col-sm-offset-3">

	<div class="col-sm-12" id="conteudo">

		<h3 align="center">Identificação</h3>
		<br><br>

		<?php echo $this->Form->create('User', array('controller' => 'users', 'url' => 'login')); ?>

			<div class="form-group">
	            <?php echo $this->Form->input('name', array('class' => 'form-control'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('password', array('class' => 'form-control'));?>
	        </div>
			<br>

			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Acessar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
            </div>

		<?php echo $this->Form->end(); ?>


  	</div>

</div>
