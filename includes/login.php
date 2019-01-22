<?php
error_reporting(E_ALL);
include_once 'db.php';
session_start();


function validarUsuario($conn, $username, $password) {
	//select * from usuario where username='admin' and password='admin4322'
	//$password2 = md5($password);
	$query = "select * from users where user='$username' and password='$password'";
  // echo $query;
  // die();

	$rtaConsulta = mysqli_query($conn, $query);

	$cantidadRegistrosEncontrados = mysqli_num_rows($rtaConsulta);
	if ($cantidadRegistrosEncontrados==1) {
		return true;
	} else {
		return false;
	}

}

if (validarUsuario($conn, $_POST["user"], $_POST["password"])) {
	$_SESSION["username"] = $_POST["user"];
	header("Location: ../app.php");

} else {

//	$_SESSION["cantidadLoginsErroneos"]++ ;
  header("Location: ../login-test.php?error=1");
	echo "Usuario/Contraseña inválidos";
}


?>
