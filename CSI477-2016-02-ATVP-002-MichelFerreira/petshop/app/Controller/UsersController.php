<?php


class UsersController extends AppController{

	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Flash');

	public function index(){

		if($this->Session->read('User')[0]['User']['type'] == 1){
			//redireciona para index1
			$this->redirect(array('action'=> 'index1'));
		}
		else if($this->Session->read('User')[0]['User']['type'] == 2){
			//redireciona para index2
			$this->redirect(array('action'=> 'index2'));
		}
		else if($this->Session->read('User')[0]['User']['type'] == 3){
			//redireciona para index3
			$this->redirect(array('action'=> 'index3'));
		}

	}

	public function index_cliente(){
		$this->redirect(array('action'=> 'index1'));
	}

	public function index_adm(){

		if($this->Session->read('User')[0]['User']['type'] == 2 || $this->Session->read('User')[0]['User']['type'] == 3){
			$this->index();
		}
		else{
			$this->Flash->set('Desculpe, acesso restrito a administradores!');
			$this->redirect('/');
		}
	}

	public function index2(){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Produto');
		$this->set('produtos', $this->Produto->find('all', array('order' => 'nome ASC')));

		$this->paginate = array('limit' => 3);
		$this->set('produtos', $this->paginate('Produto'));

	}

	public function index3(){
		if($this->Session->read('User')[0]['User']['type'] != 3){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Produto');
		$this->set('produtos', $this->Produto->find('all', array('order' => 'nome ASC')));

		$this->paginate = array('limit' => 3);
		$this->set('produtos', $this->paginate('Produto'));
	}

	public function perfil(){

		if(empty($this->request->data)){
			//carregar campos para edição
			$this->request->data= $this->User->findById($this->Session->read('User')[0]['User']['id']);
		}
		else{
			//Salvar os dados
			if($this->User->save($this->request->data)){
				$this->Flash->set('Dados atualizados com sucesso!');
				$this->redirect(array('action' => 'index1'));
			}
		}
	}

	public function removeCarrinho($id = null){

		$carrinho =  $this->Session->read('Carrinho');

		$newCarrinho = array();
		foreach($carrinho as $c){
		 	if( $c != $id ){
				array_push($newCarrinho, $c);
		 	}
		}

		$this->Session->write('Carrinho', $newCarrinho);
		$this->redirect(array('action' => 'index1'));

	}

	public function regCompra(){
		$this->loadModel('Compra');
		$arrayQtd = $this->request->data;
		$cont = 0;
		foreach ($arrayQtd as $qtd) {

			$this->request->data['Compra']['user_id'] = $this->Session->read('User')[0]['User']['id'];
        	$this->request->data['Compra']['produto_id'] = $this->Session->read('Carrinho')[$cont]; $cont++;
        	$this->request->data['Compra']['quantidade'] = $qtd;
        	$this->request->data['Compra']['data'] = date("Y-m-d h:i:s");
        	$this->Compra->create();
        	$this->Compra->save($this->request->data);
		}

		//destruir o carrinho
		$this->Session->delete('Carrinho');
		$this->Flash->set('Compra realizada com sucesso!');
		$this->redirect(array('action' => 'historico'));
	}


	public function index1(){

		$this->loadModel('Produto');
		$carrinho = $this->Session->read('Carrinho'); //recupera o array de produtos no carrinho

		//chamar os produtos selecionados e mandar para view
		$pCarrinho = $this->Produto->find('all', array(
			'conditions' => array(
				"id" => $carrinho
			)
		));
		$this->set('produtos', $pCarrinho);
	}

	public function addCarrinho(){
		if($this->request->data['Produto']['id'] != null){

			$carrinho = $this->Session->read('Carrinho'); //recupera o array de produtos no carrinho
			$i = count( $this->Session->read('Carrinho')); //incrementa o contador

			$repetido = false;
			foreach($carrinho as $c) {
				if($this->request->data['Produto']['id'] == $c){
					$repetido = true;
				}
			}

			if($repetido == false){
				$carrinho[$i] = $this->request->data['Produto']['id']; //adiciona o novo produto no array
				$this->Session->write('Carrinho', $carrinho); //salva o array no sessao de carrinho
				$this->Flash->set('Produto '. $this->request->data['Produto']['id'] .' adicionado');
			}
		}

		$this->redirect(array("controller" => "produtos", "action" => "index"));

	}

	public function historico(){

		$this->loadModel('Compra');
		// $registros = $this->Compra->findAllByUserId($this->Session->read('User')[0]['User']['id']);
		// $this->set('registros', $registros);

		$this->paginate = array(
		    'conditions' => array('Compra.user_id' => $this->Session->read('User')[0]['User']['id']),
		    'joins' => array(
		        array(
		            'alias' => 'Usuario',
		            'table' => 'users',
		            'type' => 'INNER',
		            'conditions' => '`Usuario`.`id` = `Compra`.`user_id`'
		        ),
		        array(
		            'alias' => 'Prod',
		            'table' => 'produtos',
		            'type' => 'INNER',
		            'conditions' => '`Prod`.`id` = `Compra`.`produto_id`'
		        )
		    ),
		    'limit' => 5
		);
		$this->set('registros', $this->paginate('Compra'));
	}


	public function excluirProduto($id){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Produto');
		$this->loadModel('Compra');

		if(empty($this->Compra->findAllByProdutoId($id))){

			if(!$id){
				throw new NotFoundException("Desculpe, produto Inválido!");
			}

			$this->Produto->id = $id;
	        if (!$this->Produto->exists()) {
	            throw new NotFoundException(__('Desculpe, produto não encontrado!'));
	        }

			if($this->Produto->delete($id)){
			 	$this->Flash->set("Produto excluído com sucesso!");
			 	$this->redirect(array('action' => 'index2'));
			}
			$this->Flash->set('Erro: Não foi possível excluir o registro.');
        	$this->redirect(array('action' => 'index2'));
		}
		else{
			$this->Flash->set('Não foi possível realizar a exclusão. O produto está sendo utilizado por outros registros.');
        	$this->redirect(array('action' => 'index2'));
		}

	}

	public function incluirProduto(){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Produto');

		if($this->Produto->save($this->request->data)){
			$this->Flash->set('Produto inserido com sucesso!');
			$this->redirect(array('action' => 'index2'));
		}

	}

	public function editarProduto($id){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Produto');

		if(!$id){
			throw new NotFoundException("Desculpe, produto Inválido!");
		}

		if(empty($this->request->data)){
			//carregar campos para edição
			$this->request->data= $this->Produto->findById($id);
		}
		else{
			//Salvar os dados
			if($this->Produto->save($this->request->data)){
				$this->Flash->set('Produto atualizado com sucesso!');
				$this->redirect(array('action' => 'index2'));
			}
		}

	}

	public function editarProduto2($id){
		if($this->Session->read('User')[0]['User']['type'] != 3){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Produto');

		if(!$id){
			throw new NotFoundException("Produto Inválido");
		}

		if(empty($this->request->data)){
			//carregar campos para edição
			$this->request->data= $this->Produto->findById($id);
		}
		else{
			//Salvar os dados
			if($this->Produto->save($this->request->data)){
				$this->Flash->set('Produto atualizado com sucesso!');
				$this->redirect(array('action' => 'index3'));
			}
		}
	}

	public function cadastro(){

		// $this->request->data['password'] = md5($this->request->data['password']);

		if($this->User->save($this->request->data)){
			$this->Flash->set('Usuário cadastrado com sucesso!');
			$this->redirect(array('action' => 'index_login'));
		}

	}

	public function index_login(){
		//Não preciso mexer aqui
	}

	public function validar(){
		// $usuario = $this->User->findAllByNameAndPassword($this->data['User']['name'], md5($this->data['User']['password']));
		$usuario = $this->User->findAllByNameAndPassword($this->data['User']['name'], $this->data['User']['password']);
		if(!empty($usuario))
			return $usuario;
		else
			return false;
	}

	public function login(){
		//if(!empty($this->data['User']['name'])){  //Não funciona aqui, mesmo que no modelo do academico está igual
		if(isset($this->data['User']['name'])){

			$usuario = $this->validar();
			if($usuario != false){
				$this->Flash->set('Acesso realizado com sucesso!');
				$this->Session->write('User', $usuario);
				$this->redirect('/');
				exit();
			}
			else{
				$this->Flash->set('Usuario e/ou senha inválidos!');
				$this->redirect(array('action'=> 'index_login'));
				exit();
			}

		}
		else{
			$this->redirect(array('action'=> 'index_login'));
			exit();
		}
	}

	public function logout(){
		$this->Session->destroy();
		$this->Flash->set('Volte sempre!');
      	$this->redirect(array('action' => 'index_login'));
      	exit();
	}

}
