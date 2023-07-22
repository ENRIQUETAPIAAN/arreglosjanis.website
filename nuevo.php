<?php 
require 'funciones.php';
$enviado='';
$errores = '';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $lugar = $_POST['lugar'];
    $fecha_evento = $_POST['fecha_evento'];
    $hora_evento = $_POST['hora_evento'];
    $ubicacion = $_POST['ubicacion'];
    $estatus_evento = $_POST['estatus_evento'];

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
        $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $identificador_evento = 'evento-'.substr(str_shuffle($caracteres_permitidos), 0, 5).'-2023';

        $conexion = conexion($db_config);
        if(!$conexion){
	        header('Location: ../nuevo.php');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $statement = $conexion->prepare(
                'INSERT INTO tb_registro_eventos (id_evento, identificador_evento, nombre_cliente, telefono_cliente, lugar_evento, ubicacion_evento, fecha_evento, hora_evento, estatus_evento) 
                VALUES (null, :identificador_evento, :nombre_cliente, :telefono_cliente, :lugar_evento, :ubicacion_evento, :fecha_evento, :hora_evento, :estatus_evento)');
        
            $statement->execute(array(
                ':identificador_evento' => $identificador_evento,
                ':nombre_cliente' => $nombre,
                ':telefono_cliente' => $telefono,
                ':lugar_evento' => $lugar,
                ':ubicacion_evento' => $ubicacion,
                ':fecha_evento' => $fecha_evento,
                ':hora_evento' => $hora_evento,
                ':estatus_evento' => $estatus_evento
            ));

            if(!empty($primer_producto) and !empty($cantidad_1er_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $primer_producto,
                    ':cantidad_producto' => $cantidad_1er_producto
                ));
            }
            if(!empty($segundo_producto) and !empty($cantidad_2do_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $segundo_producto,
                    ':cantidad_producto' => $cantidad_2do_producto
                ));
            }
            if(!empty($tercer_producto) and !empty($cantidad_3er_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $tercer_producto,
                    ':cantidad_producto' => $cantidad_3er_producto
                ));
            }
            if(!empty($cuarto_producto) and !empty($cantidad_4to_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $cuarto_producto,
                    ':cantidad_producto' => $cantidad_4to_producto
                ));
            }
            if(!empty($quinto_producto) and !empty($cantidad_5to_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $quinto_producto,
                    ':cantidad_producto' => $cantidad_5to_producto
                ));
            }
            if(!empty($sexto_producto) and !empty($cantidad_6to_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $sexto_producto,
                    ':cantidad_producto' => $cantidad_6to_producto
                ));
            }
            if(!empty($septimo_producto) and !empty($cantidad_7mo_producto)){
                $statement = $conexion->prepare(
                    'INSERT INTO tb_factura (id_factura, identificador_evento, nombre_producto, cantidad_producto) 
                    VALUES (null, :identificador_evento, :nombre_producto, :cantidad_producto)');

                $statement->execute(array(
                    ':identificador_evento' => $identificador_evento,
                    ':nombre_producto' => $septimo_producto,
                    ':cantidad_producto' => $cantidad_7mo_producto
                ));
            }
        }

        $enviar_a = 'tapiaa.antunes@outlook.com';
        $asunto = 'Registro de nuevo evento desde aplicacion web.';
        $mensaje_preparado = "Identificador del evento: $identificador_evento <br>";
        $mensaje_preparado .= "Nombre del cliente: $nombre<br>";
        $mensaje_preparado .= "Teléfono del cliente: $telefono<br>";
        $mensaje_preparado .= "Lugar del evento: $lugar<br>";
        $mensaje_preparado .= "Fecha del evento: $fecha_evento<br>";
        $mensaje_preparado .= "Hora del evento: $hora_evento<br>";
        $mensaje_preparado .= "Ubicación del evento: $ubicacion<br>";
        $mensaje_preparado .= "Estatus del evento: $estatus_evento<br>";
        $mensaje_preparado .= "Arreglos: $cantidad_1er_producto $primer_producto, $cantidad_2do_producto $segundo_producto, $cantidad_3er_producto $tercer_producto, $cantidad_4to_producto $cuarto_producto, $cantidad_5to_producto $quinto_producto, $cantidad_6to_producto $sexto_producto, $cantidad_7mo_producto $septimo_producto.";

        mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = true;
    }
}

require 'nuevo.view.php';
?>