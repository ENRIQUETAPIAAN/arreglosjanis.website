<?php 

require 'admin/config.php';

function conexion($db_config){
	try {
	$conexion = new PDO('mysql:host=localhost;dbname='.$db_config['basedatos'], $db_config['usuario'], $db_config['pass']);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;		
	}
}

?>