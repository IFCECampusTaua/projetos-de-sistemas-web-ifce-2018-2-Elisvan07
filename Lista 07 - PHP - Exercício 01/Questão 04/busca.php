<?php 
	$string = $_POST['string']; 
	$caractere = $_POST['caractere']; 
	
	$quantidade = strlen($string);//quantidade de letras na string
	
	$contador = 0;//número de ocorrências do caractere na string

	//loop para percorrer cada letra da string
	for ($inicio=0; $inicio < $quantidade; $inicio++) { 
		$final = 1;
		$carac = substr($string, $inicio, $final);//cada letra será comparada com o caractere

		if ($carac == $caractere) {
			$contador++;
		}
		
		$final++;
	}
	echo "Número de <b>".$caractere."</b> em <b>".$string."</b> é: ".$contador;
?>