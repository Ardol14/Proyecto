
<?php

class conexion{

private $conexion;
private $server = "localhost";
private $usuario= "root";
private $pass= "140595chocobaka";
private $db= "tatto";
private $user;
private $password;


public function __construct(){
	$this->conexion=new mysqli($this->server, $this->usuario, $this->pass, $this->db);

	if($this->conexion->connect_errno){

		die("Fallo conexion ");
	}
}

public function login($nick,$pas){
$this->user=$nick;
$this->password=$pas;
echo $pas;


$query="select nick from usuario where nick='".$this->user."' and password='".$this->password."' ";

$consulta=$this->conexion->query($query);

if($row=mysqli_fetch_array($consulta)){

session_start();

$_session['nick']=$row['nick'];
$s="Bienvenido ";
echo '<script>alert("'.$s.''.$this->user.'");</script>' ;
header('Location:indexU.html');

}else{
	echo "Usuario o contraseña invalidos";
}
	
}


public function cerrar(){
$this->conexion->close();
}


}


?>

