<?php 

class ProdutosController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Flash');


	public function index(){
		$produtos = $this->Produto->find('all');
		$this->set('produtos', $produtos);
		// $this->Produto->recursive = 0;  (conferir)

		$this->paginate = array('limit' => 12);
		$this->set('produtos', $this->paginate('Produto'));
	}


}
