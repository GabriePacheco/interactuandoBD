<?php
$conexion = new mysqli("localhost", "root", "", "agenda");
	if ($conexion){
		session_start();
		if ($_SESSION['agendaID']){
			$fk_usuario = $_SESSION['agendaID']; 
			$titulo	= $_POST['titulo']; /*"Gabrie";*/
			$fecha_inicio	=$_POST['start_date']; /*date("Y/m/d", strtotime("2016/11/10"));*/
			$hora_inicio	=$_POST['start_hour'];	//*date("H:i:s");*/
			$fecha_fin	=$_POST['end_date'];//*date("Y/m/d", strtotime("2016/11/10"));*/
			$hora_fin	=$_POST['end_hour'];//*date("H:i:s" );*/
			$dia	=$_POST['allDay']; /*1;*/

			$add_evento = mysqli_query($conexion, "INSERT INTO agenda (titulo, fecha_inicio, hora_inico, fecha_fin, hora_fin, dia,fk_usuario) VALUES ('$titulo','$fecha_inicio', '$hora_inicio', '$fecha_fin', '$hora_fin', $dia, $fk_usuario)") ;
			$php_reponse["msg"]="OK";
			$php_reponse["id"]=$conexion->insert_id;

		}else{
			$php_reponse["msg"]="La secion a caducado ";
		}
	
	}else{
		$php_reponse["msg"]="No se pudo conectar con el servidor";

	}
	echo json_encode($php_reponse);
  	
	$conexion->close();

 ?>
