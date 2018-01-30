<?php
require_once "conexion.php";
if ($php_response["msg"]=="OK"){
	$u_exiten = mysqli_query($conexion, "SELECT * FROM usuarios");
	if (mysqli_num_rows($u_exiten) > 0 ){
		$php_response['obser']= "los usaurios ya existen ";
	
	}else{

		$email = "gabioh2012@gmail.com";
		$nombre="Gabriel Pacheco ";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)"); 
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "OtroMansitoMedioRaro@mansitogil.com";
		$nombre="Elver Melano ";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "OtroMansito2MedioMariado@mansitogil.com";
		$nombre="Rosa Galarga ";
		$password =md5("123456");
		$fecha_nacimiento = "1982/07/08";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();
	}	
	$cumple = date('Y/m/d',strtotime("1982/07/08"));
	



}
