<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Galeria</title>
<link rel="stylesheet" type="text/css" href="css/estiloMenu.css"/>
<link rel="stylesheet" type="text/css" href="css/estiloGaleria.css">
<link rel="stylesheet" type="text/css" href="css/field2.css">
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/botones.js"></script>


</head>


<body BGCOLOR="black">
<a href="index.html"><img id="icono" src="image/icono.jpg"></a>


<div id="contenedor">


<a name="inicio">
<h1 class="titulo">tattoo  studio</h1>


<div class="menu">
<a class="men" href="indexU.html">INICIO </a>
<a class="men" href="tattoosU.html">TATTOOS</a>
<a class="men" href="GaleriaU.php">GALERIA</a>
</div>
 </a>

<div class="caja">

	</div>


<div class="caja1">	
	<div class="login">
	<br> 
<form  method="POST" action="nueva.php">
	<fieldset>
		<legend>Edicion de imagen</legend>
<label>Titulo de imagen</label> <input type="text" name="Titulo" placeholder="Titulo" maxlength="50"/><br><br>		
<label>Nombre de imagen</label> <input type="text" name="Nombre" id="Nom" placeholder="Nombre" maxlength="50"/> <br><br>
<label>Descripcion</label> <br> <textarea name="Descripcion" id="Des" rows="4" cols="50"></textarea> <br>
<input type="submit" value="Nuevo Registro">
<input type="button" value="Guardar Edicion" id="Guardar">
<input type="button" value="Eliminar"  id="Eliminar">
<input type="reset" value="Limpiar">
</fieldset>
</form>	
</div>

</body>
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
		<form  method="POST" >
			
		<h1><?php echo $valores['Nombre']; ?></h1>  <!-- se muestra el nonbre de la imagen   -->
<img  src="image/<?php echo $valores['Imagen']; ?>" id="imgP"/>
<h5>Descripcion: <?php echo $valores['Descripcion']; ?></h5>	<!-- se muestra una breve descripcion de la imagen -->
</form>
	</div>
	</div>


	<?php
}
}
?>

<!-- se crea el formulario  para dejar comentarios en el sitio -->
<?php	
	$sql="select * from comentarios"; // se ejecuta una consulta  a la base de datos  de la galeria de imagenes.
	if($conn->realizarConexion()){  //si la conexion es exitosa se ejecuta la consulta 
$resultado=$conn->hacerConsulta($sql);
foreach ($resultado as $valores) {
	?>
<div id="login"> 	

		
		<fieldset>
<h1><?php echo $valores['Nombre']; ?></h1>  <!-- se muestra el nonbre de la imagen   -->
		<h1><?php echo $valores['Correo']; ?></h1>
		<h1><?php echo $valores['Comentario']; ?></h1>
<fieldset>
	
	</div>


	<?php
}
}
?>
</div>
	




		


</html>





