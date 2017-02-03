<div class="container text-center">
  <h3><strong>Página do Cliente<br></strong></h3>
  <div class="row">
    <div class="col-sm-12">
      <img src="./img/pac.jpg">

    </div>
  </div>
</div>

<br></br>

<?php echo $this->Html->link("É novo aqui? Clique aqui para se cadastrar!",
array('controller' => 'pacientes',
'action' => 'addp'));?> <br></br>

<?php echo $this->Html->link("Fazer Login",
array('controller' => 'pacientes',
'action' => 'login'));?> <br></br>

<?= $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>
