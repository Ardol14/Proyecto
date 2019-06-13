<?php
	include "script/php/ConexionPDO.php";
	$conn=new ConexionPDO("localhost","root","140595chocobaka","tatto");	
	//$sql="select * from imagenes";
	$user=$_POST['Nick'];
	$pas=$_POST['Password'];
	$pas=md5($pas);
	$sql="insert into usuario(Nick,password) values('".$user."','".$pas."')";
	if($conn->realizarConexion()){			
	$resultado=$conn->hacerConsulta($sql);
echo "Registro exitoso";
		header('Location:indexU.html');
}
?>
