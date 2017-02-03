<h1>Login realizado com sucesso!</h1>

<?php echo $this->Html->link("Editar dados pessoais",
array('controller' => 'admin',
'action' => 'edit'));?></br>

<?php echo $this->Html->link("Excluir Conta",
array('controller' => 'admin',
'action' => 'del'));?></br>


<?php echo $this->Html->link("Agendar novo exame",
array('controller' => 'pacientes',
'action' => 'add'));?><br></br>

  <h2>Meus Exames</h2>
  <hr/>
  <table class="table table-bordered table-hover">

    <tbody>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Data</th>

      </tr>

      <?php foreach($exames as $e): ?>
        <tr>
          <td>
            <?php echo $e['Exame']['id']; ?>
          </td>
          <td>
            <?php echo $e['Procedimento']['nome']; ?>
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
