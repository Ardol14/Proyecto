<?php
	include "script/php/ConexionPDO.php";
	$conn=new ConexionPDO("localhost","root","140595chocobaka","tatto");	
	//$sql="select * from imagenes";
	$t=$_POST["Titulo"];
	$n=$_POST["Nombre"];	
	$d=$_POST["Descripcion"];
	$sql="insert into imagenes(Imagen,Nombre,Descripcion) values('".$n."','".$t."','".$d."')";
	if($conn->realizarConexion()){			
	$resultado=$conn->hacerConsulta($sql);
echo "Registro exitoso";
		header('Location:GaleriaU.php');
}
?>