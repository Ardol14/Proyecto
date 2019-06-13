$(document).ready(inicio);

function inicio(){
	$("#Borrar").click(cargarCelular);
	
}

function cargarCelular(){
	$("#contenedor").load("boton.php?Nombre=");
}