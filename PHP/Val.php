<?php

session_start();

include("conexion.php");

if(isset($_POST['email']) && isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];

$password = hash ("sha256", $password);

$user = $conexion->prepare("SELECT * FROM usuarios WHERE email= '$email and password = '$password' " , ["$email", "$password" ]);

	if($user){
	$data = $user;
	$_SESSION['idRol'] = $data['idRol'];
	echo  $_SESSION['idRol'];
	}
	else{
		echo 0;
	}
}

?>