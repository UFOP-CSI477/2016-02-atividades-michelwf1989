<br/>
<?php echo $this->Html->link("Todos Exames Solicitados",
                    array('controller' => 'admin',
                    'action' => 'exameS'));?><br></br>

<?php echo $this->Html->link("Listar Pacientes",
                    array('controller' => 'admin',
                            'action' => 'pacientes'));?> <br></br>

<?php echo $this->Html->link("Total de Exames por Pacientes",
                    array('controller' => 'admin',
                            'action' => 'totalE'));?> <br></br>

<h2>Total de Exames por Procedimento:<?php count($totalP)?></h2>
<hr/>
<table class="table table-bordered table-hover">

  <tbody>
    <tr>
        <th>Exame</th>
        <th>Valor</th>
        <th>Data</th>
    </tr>

    <?php foreach($totalP as $e): ?>
    <tr>
        <td>
            <?php echo $e['Procedimento']['nome']; ?>
        </td>
        <td>
            <?php echo $e['Procedimento']['preco']; ?>
        </td>
        <td>
            <?php echo $e['Exame']['data']; ?>
        </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
