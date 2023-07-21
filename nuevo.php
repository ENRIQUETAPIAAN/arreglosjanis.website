<?php 

$enviado='';
$errores = '';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $lugar = $_POST['lugar'];
    $fecha_evento = $_POST['fecha_evento'];
    $hora_evento = $_POST['hora_evento'];
    $ubicacion = $_POST['ubicacion'];

    $primer_producto = $_POST['primer_producto'];
    $cantidad_1er_producto = $_POST['cantidad_primer_producto'];

    $segundo_producto = $_POST['segundo_producto'];
    $cantidad_2do_producto = $_POST['cantidad_segundo_producto'];

    $tercer_producto = $_POST['tercer_producto'];
    $cantidad_3er_producto = $_POST['cantidad_tercer_producto'];

    $cuarto_producto = $_POST['cuarto_producto'];
    $cantidad_4to_producto = $_POST['cantidad_cuarto_producto'];

    $quinto_producto = $_POST['quinto_producto'];
    $cantidad_5to_producto = $_POST['cantidad_quinto_producto'];

    $sexto_producto = $_POST['sexto_producto'];
    $cantidad_6to_producto = $_POST['cantidad_sexto_producto'];

    $septimo_producto = $_POST['septimo_producto'];
    $cantidad_7mo_producto = $_POST['cantidad_septimo_producto'];

    if(!empty($nombre)){
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    } else{
        $errores .= 'Por favor ingresa el nombre del cliente, este campo es obligatorio.<br>';
    }

    if(!empty($telefono)){
        $telefono = htmlspecialchars($telefono);
        $telefono = trim($telefono);

        if(!filter_var($telefono, FILTER_VALIDATE_INT)){
            $errores .= 'Por favor ingresa un numero real. <br>';
        }
    } else{
        $errores .= 'Por favor ingresa el telefono del cliente, este campo es obligatorio.<br>';
    }

    if(!empty($lugar)){
        $lugar = trim($lugar);
        $lugar = htmlspecialchars($lugar);
        $lugar = filter_var($lugar,FILTER_SANITIZE_STRING);

    } else{
        $errores .='Por favor ingresa el lugar del evento, este campo es obligatorio.<br>';
    }

    if(empty($fecha_evento)){
        $errores .= 'Por favor ingresa la fecha del evento, este campo es obligatorio. <br>';
    }

    if(empty($hora_evento)){
        $errores .= 'Por favor ingresa la hora de inicio del evento, este campo es obligatorio. <br>';
    }

    if(!empty($ubicacion)){
        $ubicacion = htmlspecialchars($ubicacion);
    } else{
        $errores .= 'Por favor ingresa la ubicacion del evento, este campo es obligatorio. <br>';
    }

    if(empty($primer_producto)){
        $errores.= 'Por favor ingresa por lo menos un producto en el registro del evento. <br>';
    }

    if(empty($cantidad_1er_producto)){
        $errores .= 'Por favor ingresa la cantidad de piezas del producto que se van a requerir. <br>';
    }

    if(!$errores){

        

        $enviado = true;
    }
}

require 'nuevo.view.php';
?>