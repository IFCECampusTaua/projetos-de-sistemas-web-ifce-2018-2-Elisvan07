<?php 
	$numero = $_POST['numero']; 

	$num = $numero;
	//calcular fatorial
	$resultado = 1;
	for($i = $numero; $i > 1; $i--){
		$resultado *= $numero; 
		$numero--;
	}

	echo "Fatorial de ".$num." é: ".$resultado; 
	 
?>