<?php 

class User extends AppModel{
	
	public $hasMany = 'Compra';

	public $validate = array(
	   'name' => array(

		   	'alphaNumeric' => array(
	                'rule'     => 'alphaNumeric',
	                'message'  => 'Somente letras e números'
	        ),

	        'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Usuário já cadastrado em nosso banco de dados'
			),
  		),

	   'email' => array('email'),

	   
	   'password' => array(
	        'minLength' => array(
		        'rule' => array('minLength', 8),
		        'message' => 'Senha deve conter no mínimo 8 caracteres'
	        ),

	        'validacaoSenha' => array(
	   			'rule' => array('validacaoSenha'),
	   			'message' => 'Senhas não combinam'
	   		)
	        
	    ),

	   'cpassword' => array(
	   		'minLength' => array(
		        'rule' => array('minLength', 8),
		        'message' => 'Senha deve conter no mínimo 8 caracteres'
	        ),

	   		'validacaoSenha' => array(
	   			'rule' => array('validacaoSenha'),
	   			'message' => 'Senhas não combinam'
	   		)

	   	)

	);


	public function validacaoSenha($data){
         
        $senha = $this->data['User']['password'];
        $confirm_senha = $this->data['User']['cpassword'];
              
        if($senha===$confirm_senha){
             
            return true;
             
        }else{
             
            return false;
             
        }
         
    }

	
}
