<?php 
	$string1 = $_POST['string1']; 
	$string2 = $_POST['string2']; 

	// Se as strings forem iguais
	if ($string1 == $string2){
		echo "IGUAL";
	}
	// Se as strings forem diferentes
	else{
		echo "DIFERENTE";
	}
	 
?>