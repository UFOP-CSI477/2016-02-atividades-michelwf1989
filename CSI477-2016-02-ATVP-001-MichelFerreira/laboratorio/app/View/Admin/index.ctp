
<div class="container text-center">
  <h3><strong>Área do Administrador<br></strong></h3>
  <div class="row">
    <div class="col-sm-12">
      <img src="./img/adm.jpg">

    </div>
  </div>
</div>

<br/>
<br/>
<?php

echo $this->Html->link("Listar Procedimentos",array('controller' => 'admin','action'=> 'procedimentos'));?><br></br>


<?php echo $this->Html->link("Todos Exames Solicitados",
array('controller' => 'admin',
'action' => 'exameS'));?><br></br>

<?php echo $this->Html->link("Listar Pacientes",
array('controller' => 'admin',
'action' => 'pacientes'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Pacientes",
array('controller' => 'admin',
'action' => 'totalE'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>

<?= $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>
