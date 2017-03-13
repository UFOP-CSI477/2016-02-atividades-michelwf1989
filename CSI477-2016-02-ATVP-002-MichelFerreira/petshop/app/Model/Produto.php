<?php 

class Produto extends AppModel{


public $validate = array(
	   'nome' => array(

		   	'alphaNumeric' => array(
	                'rule'     => 'alphaNumeric',
	                'message'  => 'Somente letras e números'
	        ),

	        'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Produto já cadastrado em nosso banco de dados'
			),
  		)

);


}
