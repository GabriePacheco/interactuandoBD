<?php
	$conexion = new mysqli("localhost", "root", "", "agenda");
	if ($conexion){
		session_start();
		if ($_SESSION['agendaID']){
			$eventos= mysqli_query($conexion, "SELECT * FROM agenda where fk_usuario = 1");
			$row_eventos = mysqli_fetch_assoc($eventos);
			$php_reponse["msg"]="OK";
			$php_reponse["eventos"]=[];
			while ($row = mysqli_fetch_assoc($eventos)) {
					$php_reponse["eventos"].= $row . ",";
				}	
			
			
			

		}else{
			$php_reponse["msg"]="La secion a caducado ";
		}
	
	}else{
		$php_reponse["msg"]="No se pudo conectar con el servidor";

	}
	echo json_encode($php_reponse);
  	




 ?>
