<br/>
<?php echo $this->Html->link("Todos Exames Solicitados",
array('controller' => 'admin',
'action' => 'exameS'));?><br></br>

<?php echo $this->Html->link("Listar Pacientes",
array('controller' => 'admin',
'action' => 'pacientes'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Procedimento",
array('controller' => 'admin',
'action' => 'totalP'));?><br></br>

<h2>Total de Exames por Paciente: <?php count($totalE)?></h2>
<hr/>
<table class="table table-bordered table-hover">

  <tbody>
    <tr>
      <th>Exame</th>
      <th>Paciente</th>
    </tr>
    <?php foreach($totalE as $e): ?>
      <tr>
        <td>
          <?php echo $e['Procedimento']['nome']; ?>
        </td>
        <td>
          <?php echo $e['Paciente']['nome']; ?>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
