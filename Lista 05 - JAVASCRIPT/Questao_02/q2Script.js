// Função criada em um ficheiro externo que mostra um número aleatório.
function numAleatorio(){
	var num = Math.floor(Math.random() * 51);
	document.getElementById("numero").innerHTML = num;
}

