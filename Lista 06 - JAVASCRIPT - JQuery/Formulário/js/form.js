$(document).ready(function(){

	//Função para mostrar uma mensagem ao carregar a tela.
	$(function () {            
		$("#msg").show();
	});
	//Função para utilizar apenas números no campo telefone e cpf.
	$(".somenteNumero").bind("keyup blur focus", function(e) {
	    e.preventDefault();
	    var expre = /[^\d]/g;
	    $(this).val($(this).val().replace(expre,''));
	});

	$("#formCadastro").validate({
		//requisitos dos campos
		rules:{
			nome: {
				required: true,
				maxlength: 255,
				minlength: 4,
			},
			telefone: {
				required: true,
				maxlength: 9,
				minlength: 8,
			},
			data: {
				required: true,
			},
			cpf: {
				required: true,
				maxlength: 11,
				minlength: 11,
			},
			instituicao: {
				required: true,
				maxlength: 255,
				minlength: 3,
			},
			email: {
				required: true,
				email: true,
				maxlength: 255,
			},
		},
			
		submitHandler: function(form){
			//mensagem de sucesso
			alert("Sucesso!!!");
			//reseta formulario
			document.getElementById("formCadastro").reset();					
		}
	}) 
})