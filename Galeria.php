<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Galeria</title>
<link rel="stylesheet" type="text/css" href="css/estiloMenu.css"/>
<link rel="stylesheet" type="text/css" href="css/estiloGaleria.css">
<link rel="stylesheet" type="text/css" href="css/field2.css">


</head>


<body BGCOLOR="black">
<a href="login.html"><img id="icono" src="image/icono.jpg"> </a>



<div id="contenedor">


<a name="inicio">
<h1 class="titulo">tattoo  studio</h1>

<div class="menu">
<a class="men" href="index.html">INICIO </a>
<a class="men" href="tattoos.html">TATTOOS</a>
<a class="men" href="Galeria.php">GALERIA</a>
</div>
 </a>

<div class="caja">

	</div>


<div class="caja1">	
	
<h3 class="titulo"> Galeria</h3>
<?php
	include "script/php/ConexionPDO.php"; //aqui se incluye el archivo php para realizar la  conexion con  la base de datos.
	$conn=new ConexionPDO("localhost","root","140595chocobaka","tatto"); // se aplican los parametros para conectar  a la base de datos.
	//$buscar=strtolower($_REQUEST['Marca']);
	//$sql="select * from celular where Marca like '%".$buscar."%'";
	$sql="select * from imagenes"; // se ejecuta una consulta  a la base de datos  de la galeria de imagenes.
	if($conn->realizarConexion()){  //si la conexion es exitosa se ejecuta la consulta 
$resultado=$conn->hacerConsulta($sql);
foreach ($resultado as $valores) {
	?>
<div id="nav"> 	
	<div>
		<h1><?php echo $valores['Nombre']; ?></h1>   <!-- se muestra el nonbre de la imagen   -->
<a href="#" onclik="javascript:abrir_ventana('image/<?php echo $valores['Imagen']; ?>,'350','250')"> <img  src="image/<?php echo $valores['Imagen']; ?>" /></a>
<h5>Descripcion: <?php echo $valores['Descripcion']; ?></h5>	<!-- se muestra una breve descripcion de la imagen -->
	</div>
	</div>


	<?php
}
}
?>

<!-- se crea el formulario  para dejar comentarios en el sitio -->
<div class="login">
	<br> 
<form  method="POST" action="reg.php">
	<fieldset>
<label>Nombre</label> <input type="text" name="Nombre" placeholder="Nombre" maxlength="50"/> <br><br>
<label>Correo</label> <input type="email" name="Correo" placeholder="Correo" maxlength="50"/><br><br>
<label>Comentario</label> <br> <textarea name="Comentario" rows="4" cols="50"></textarea> <br>
<input type="submit" value="Enviar">
<input type="reset" value="Limpiar">
</fieldset>
</form>	
</div>
</div>

</body>


		


</html>