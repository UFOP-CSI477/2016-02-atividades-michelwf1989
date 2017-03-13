  $( document ).ready( function() {

	$("#cadastro").validate({
		
		rules:{
			nome:{
				required: true
			},

		
			email:{
				required: true, 
				email: true
			},


			senha:{
				required: true

			},

			cSenha:{
				required: true,
				equalTo: "#senha"
			}	

		},
	
	
		messages:{
			nome:{
				required: "Por favor, digite o nome para prosseguir!"
			},
			
		
			email:{
				required: "Campo email necessário",
				email: "Digite um e-mail válido"
			},


			senha:{
				minlength: "senha com 8 caracteres",
				required: "Campo senha é obrigatório!"
			},

			cSenha:{
				minlength: "senha com 8 caracteres",
				required: "Campo de confirmação de senha é obrigatório!",
				equalTo: "As senhas devem ser iguais!"
			}
		}
	
	});

});


// <?php echo $this->Html->script('jquery-3.1.1', false); ?>
// <?php echo $this->Html->script('cadastro', false); ?>	
// <?php echo $this->Html->script('jquery.validate', false); ?>