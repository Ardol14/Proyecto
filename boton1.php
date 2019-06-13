<?php
$buscar=$_POST["Nombre"];
$t=$_POST["Titulo"];
$d=$_POST["Descripcion"];
	include "script/php/ConexionPDO.php";
	$conn=new ConexionPDO("localhost","root","","tatto");	
	$sql="update imagenes set Titulo='".$t."',Descripcion='".$d."'  where '".$buscar."' ";
	if($conn->realizarConexion()){
		echo "conexion exitosa";
		header('Location:Galeria.php');	
	$resultado=$conn->hacerConsulta($sql);

}
?>