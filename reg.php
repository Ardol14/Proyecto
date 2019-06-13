<?php
	include "script/php/ConexionPDO.php";
	$conn=new ConexionPDO("localhost","root","140595chocobaka","tatto");	
	//$sql="select * from imagenes";
	$Nombre=$_POST['Nombre'];
	$Correo=$_POST['Correo'];
	$Comentario=$_POST['Comentario'];
	$sql="insert into comentarios(Nombre,Correo,Comentario) values('".$Nombre."','".$Correo."','".$Comentario."')";
	if($conn->realizarConexion()){
		echo "conexion exitosa";
		header('Location:Galeria.php');	
	$resultado=$conn->hacerConsulta($sql);

}
?>


