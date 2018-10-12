//função de condição IF

function funcNumero() {

	var numero = document.getElementById("num").value;

	if(numero >= 0 && numero < 10){
		alert("Insuficiente!");
	}
	if(numero >= 10 && numero < 14){
		alert("Bom!");
	}
	if(numero >= 14){
		alert("Muito Bom!");
	}
}	
