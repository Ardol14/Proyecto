$(document).ready(inicio);

function inicio(){
	$("#nav img").click(cambioImagen);
}
function cambioImagen(url){
	window.open(url,"ventana","width=500,height=300, top=200,left=200");
	ruta=$(this).attr("src");
	//alert("la ruta es:"+ruta);
	$("#imgP").css("display","none");
$("#imgP").attr("src",ruta);
$("#imgP").fadeIn(2000);
}

