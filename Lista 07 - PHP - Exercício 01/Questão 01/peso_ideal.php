<?php 
	$sexo = $_POST['sexo']; 
	$altura = $_POST['altura']; 

	//calcula o peso ideal
	if($sexo == 'm'){ 
	$calculo = (72.7 * $altura)-58; 
	echo "O seu peso ideal é: ".$calculo." Kg";	
	}
	if($sexo == 'f'){ 
	$calculo = (62.1 * $altura)-44.7; 
	echo "O seu peso ideal é: ".$calculo." Kg"; 
	} 
?>