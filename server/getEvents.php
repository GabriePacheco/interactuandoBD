<?php
	$conexion = new mysqli("localhost", "root", "", "agenda");
	if ($conexion){
		session_start();
		if ($_SESSION['agendaID']){
			$eventos= mysqli_query($conexion, "SELECT * FROM agenda where fk_usuario = '". $_SESSION['agendaID']."'");
			$row_eventos = mysqli_fetch_array($eventos);
			$php_reponse["msg"]="OK";
			$php_reponse["eventos"]=$row_eventos;

		}else{
			$php_reponse["msg"]="La secion a caducado ";
		}
	
	}else{
		$php_reponse["msg"]="No se pudo conectar con el servidor";

	}
	echo json_encode($php_reponse);
  	




 ?>
