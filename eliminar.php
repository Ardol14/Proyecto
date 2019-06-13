<?php
	include "script/php/ConexionPDO.php";
	$conn=new ConexionPDO("localhost","root","140595chocobaka","tatto");	
	//$sql="select * from imagenes";
	$Nombre=$_POST['Nombre'];
	$sql="delete from imagenes where Nombre='Mariposa'";
	if($conn->realizarConexion()){
		echo "conexion exitosa";
		header('Location:GaleriaU.php');	
	$resultado=$conn->hacerConsulta($sql);

}
?>

