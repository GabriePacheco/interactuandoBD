<?php
$mysqli = new mysqli("localhost", "root", "", "agenda");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Eror de conexcion %s\n", mysqli_connect_error());
    exit();
}

$email = "gabioh2012@gmail.com";
$nombre = "Gabriel Pacheco";
$password=md5("sex2004");
$fecha_nacimiento = date("Y/m/d", strtotime("1982/07/08"));

/* crear una sentencia preparada */
if ($stmt = $mysqli->prepare("INSERT INTO usuarios (email,nombre,password,fecha_nacimiento) VALUES (?,?,?,?)")) {

    
    $stmt->bind_param("ssss", $email,$nombre,$password,$fecha_nacimiento);
      $stmt->execute();

	$email = "otromansito@gmail.com";
	$nombre = "Otro Mansito";
	$password=md5("123456");
	$fecha_nacimiento = date("Y/m/d", strtotime("1992/07/08"));


	$stmt->bind_param("ssss", $email,$nombre,$password,$fecha_nacimiento);
	 $stmt->execute();

	$email = "otromansit2o@gmail.com";
	$nombre = "EOtro Mansito";
	$password=md5("123456");
	$fecha_nacimiento = date("Y/m/d", strtotime("1982/07/08"));

    $stmt->bind_param("ssss", $email,$nombre,$password,$fecha_nacimiento);
    $stmt->execute();

    
} else{
	mysql_error();
}
/* cerrar conexión */
$mysqli->close();
?>