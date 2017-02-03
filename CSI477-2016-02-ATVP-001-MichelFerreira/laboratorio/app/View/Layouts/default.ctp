<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('Site');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>

<body>
	<div class="navbar navbar-default navbar-fixed-top">

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><?php echo $this->Html->link("Procedimentos Ofertados",
				array('controller' => 'procedimentos',
				'action' => 'index'));?></li>
				<li><?php echo $this->Html->link("Área do Cliente",
				array('controller' => 'pacientes',
				'action' => 'index'));?></li>
				<li><?php echo $this->Html->link("Área do Administrador",
				array('controller' => 'admin',
				'action' => 'index'));?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
				$paciente = $this->Session->read("Paciente.nome");
				if(isset($paciente)){
					echo '<li title="Sair do Sistema">'.$this->Html->link("Olá $paciente",
					array('controller' => 'pacientes',
					'action' => 'logout')).'</li>';
				}
				?>
			</ul>
		</div>
	</div>
</div>
<div class="container body-content">
	<?php echo $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>
	<hr />
	<footer>
		<center><p>Michel Wagner Ferreira &copy; CliniLab Laboratórios. Todos os direitos reservados.</p><center/>
			<hr/>
			<br/><br/>
		</footer>
	</div>
</body>
</html>
