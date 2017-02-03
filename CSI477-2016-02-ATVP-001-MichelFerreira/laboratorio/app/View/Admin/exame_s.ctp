
<br/>

<?php echo $this->Html->link("Listar Pacientes",
array('controller' => 'admin',
'action' => 'pacientes'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Pacientes",
array('controller' => 'admin',
'action' => 'totalE'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>
<?php echo $this->Html->link("Listar Procedimentos",
array('controller' => 'admin',
'action' => 'procedimentos'));?><br></br><br></br>


<h2>Exames Solicitados por Todos</h2>
<hr/>
<table class="table table-bordered table-hover">

  <tbody>
    <tr>
      <th>Exame</th>
      <th>Paciente</th>
      <th>Valor</th>
      <th>Data</th>
    </tr>

    <?php foreach($exameS as $e): ?>
      <tr>
        <td>
          <?php echo $e['Procedimento']['nome']; ?>
        </td>
        <td>
          <?php echo $e['Paciente']['nome']; ?>
        </td>
        <td>
          <?php echo $e['Procedimento']['preco']; ?>
        </td>
        <td>
          <?php echo $e['Exame']['data']; ?>
        </td>
        <td><?php echo $this->Html->link('Editar', array('action' => 'editarE', $e['Exame']['id'])); ?>
          | <?php echo $this->Html->link(
          'Excluir', array(
            'action' => 'excluirE',
            $e['Exame']['id']), array('confirm' => 'Você tem certeza que quer excluir este Exame!')
          ); ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
