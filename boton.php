<?php
$buscar=$_POST["Nombre"];
	include "script/php/ConexionPDO.php";
	$conn=new ConexionPDO("localhost","root","","tatto");	
	$sql="delete from imagenes where Nombre like '%".$buscar."%' )";
	if($conn->realizarConexion()){
		echo "conexion exitosa";
		header('Location:GaleriaU.php');	
	$resultado=$conn->hacerConsulta($sql);

}
?>