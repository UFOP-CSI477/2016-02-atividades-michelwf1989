<br></br><br></br>

<div class="container text-center">
  <h3><strong>Procedimentos Oferecidos em nosso Laboratório<br></strong></h3>
  <center><h3>Exames rápidos, de qualidade e com ótimos preços. Isso você só encontra aqui, no CliniLab Laboratórios!</h3></center>
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


        </tr>

      </tr>
    <?php endforeach ?>

  </tbody>
</table>

<?= $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>
