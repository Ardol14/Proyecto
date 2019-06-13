<?php
$cantFilas=7;
$cantColumnas=3;
$columna="";
	include "script/php/ConexionPDO.php"; //aqui se incluye el archivo php para realizar la  conexion con  la base de datos.
	$conn=new ConexionPDO("localhost","root","140595chocobaka","tatto"); // se aplican los parametros para conectar  a la base de datos.
	//$buscar=strtolower($_REQUEST['Marca']);
	//$sql="select * from celular where Marca like '%".$buscar."%'";
	$sql="select * from imagenes"; // se ejecuta una consulta  a la base de datos  de la galeria de imagenes.
	if($conn->realizarConexion()){  //si la conexion es exitosa se ejecuta la consulta 
$resultado=$conn->hacerConsulta($sql);
foreach ($resultado as $valores) {
}
echo "<table border=2>";
for($fila=1;$fila<=$cantFilas;$fila++){
echo "<tr>";
for($col=1;$col<=$cantColumnas;$col++){
	
echo "<td>columnas $col,fila $fila</td>";

}
echo "<tr>";
}
echo "</table>";

}



?>

	if($col==1){
$columa="Nombre";
	}
