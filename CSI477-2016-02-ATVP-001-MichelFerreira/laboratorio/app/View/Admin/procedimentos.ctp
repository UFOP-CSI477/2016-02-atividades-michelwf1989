<?php echo $this->Html->link("Todos Exames Solicitados",
array('controller' => 'admin',
'action' => 'exameS'));?><br></br>

<?php echo $this->Html->link("Total de Exames por Pacientes",
array('controller' => 'admin',
'action' => 'totalE'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>
<?php echo $this->Html->link("Listar Pacientes",
array('controller' => 'admin',
'action' => 'pacientes'));?><br></br>


<h3><strong>Procedimentos Oferecidos em nosso Laboratório<br></strong></h3>
<center><h3>Exames rápidos, de qualidade e com ótimos preços. Isso você só encontra aqui, no CliniLab Laboratórios!</h3></center>
<div class="container text-center">
  <?php  echo $this->Html->link("Inserir um novo Procedimento",
  array('controller' => 'procedimentos',
  'action'=> 'add'));
  ?>
  <div class="row">
    <div class="col-sm-12">
      <img src="./img/lab.jpg">

    </div>
  </div>
</div>
<table class="table table-bordered table-hover">

  <tbody>

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Opções de Configuração</th>
    </tr>

    <?php foreach($procedimentos as $p): ?>
      <tr>
        <td>
          <?php echo $p['Procedimento']['id']; ?>

          <td>
            <?php echo $p['Procedimento']['nome']; ?>
          </td>
          <td>
            <?php echo $p['Procedimento']['preco']; ?>
          </td>

          <td><?php echo $this->Html->link('Editar', array('action' => 'editarP', $p['Procedimento']['id'])); ?>
            | <?php echo $this->Html->link(
            'Excluir', array(
              'action' => 'excluirP',
              $p['Procedimento']['id']), array('confirm' => 'Você tem certeza que quer excluir este procedimento?')
            ); ?></td>
          </tr>

        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
