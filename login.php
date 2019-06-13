<?php
include("conexion.php");
$user=addslashes(htmlentities($_POST["Nick"]));
$pas=md5(addslashes(htmlentities($_POST["Password"])));
//$obj= new sanitize();
//$valorSanitizado=$obj->mysql($_POST["Nick"],$_POST["Password"]);
//$pas=htmlentities(trim($_POST["Password"]));
$tatto= new conexion;
$tatto->login($user,$pas);
$tatto->cerrar();
?>