$(document).ready(inicio);

function inicio(){
	$("#nav img").click(function Extraer(){
	var ruta=$(this).attr("src");
	alert("la ruta es:"+ruta);
$("#Nom").val(ruta);
}
);
	$("#Eliminar").click(Eliminar);
	$("#Editar").click(Editar);
}















function Editar(){
ruta=$(this).attr("src");
	$("")("boton1.php");
}

function Eliminar(){

	$("#contenedor").load("eliminar.php");
}
