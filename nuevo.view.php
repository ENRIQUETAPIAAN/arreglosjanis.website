<?php 

echo $nombre . '<br>';
echo $telefono . '<br>';
echo $lugar . '<br>';
echo $fecha_evento . '<br>';
echo $hora_evento . '<br>';
echo $ubicacion . '<br>';
echo $primer_producto . '<br>';
echo $cantidad_1er_producto . '<br>';
echo $segundo_producto . '<br>';
echo $cantidad_2do_producto . '<br>';
echo $tercer_producto . '<br>';
echo $cantidad_3er_producto . '<br>';
echo $cuarto_producto . '<br>';
echo $cantidad_4to_producto . '<br>';
echo $quinto_producto . '<br>';
echo $cantidad_5to_producto . '<br>';
echo $sexto_producto . '<br>';
echo $cantidad_6to_producto . '<br>';
echo $septimo_producto . '<br>';
echo $cantidad_7mo_producto . '<br>';
echo $errores;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1>Administración de eventos</h1>
            <a href="#">Cerrar Sesión</a>
        </div>
    </header>
    <main>
        <section class="tarjeta-evento-form padding">
            <h2 class="titulo">Agregar Nuevo Evento</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Nombre del cliente</label>
                        <input name="nombre" class="mitad" type="text" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre; ?>">
                    </div>
                    <div class="contenedor-variables">
                        <label>Teléfono</label>
                        <input name="telefono" class="mitad" type="tel" placeholder="Teléfono:" value="<?php if(!$enviado && isset($telefono)) echo $telefono; ?>">
                    </div>
                </div>
                
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Lugar del evento</label>
                        <input name="lugar" class="dos-cuartos" type="text" placeholder="Lugar:">
                    </div>
                    <div class="contenedor-variables">
                        <label>Fecha del evento</label>
                        <input name="fecha_evento" class="un-cuarto" type="date">
                    </div>
                    <div class="contenedor-variables">
                        <label>Hora de inicio</label>
                        <input name="hora_evento" class="un-cuarto" type="time">
                    </div>
                </div>
                
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Ubicación del evento</label>
                        <input name="ubicacion" class="uno" type="text" placeholder="Ubicación:">
                    </div>
                        <!--<input type="submit" value="Registrar" class="btn-form">-->
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Productos</label>
                        <select name="primer_producto" class="tres-cuartos">
                            <option value="">Selecciona 1er producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <label>Cantidad</label>
                        <input name="cantidad_primer_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Segundo producto</label>-->
                        <select name="segundo_producto" class="tres-cuartos">
                            <option value="">Selecciona 2do producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <!--<label>Cantidad</label>-->
                        <input name="cantidad_segundo_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Tercer producto</label>-->
                        <select name="tercer_producto" class="tres-cuartos">
                            <option value="">Selecciona 3er producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <!--<label>Cantidad</label>-->
                        <input name="cantidad_tercer_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Cuarto producto</label>-->
                        <select name="cuarto_producto" class="tres-cuartos">
                            <option value="">Selecciona 4to producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <!--<label>Cantidad</label>-->
                        <input name="cantidad_cuarto_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Quinto producto</label>-->
                        <select name="quinto_producto" class="tres-cuartos">
                            <option value="">Selecciona 5to producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <!--<label>Cantidad</label>-->
                        <input name="cantidad_quinto_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Sexto producto</label>-->
                        <select name="sexto_producto" class="tres-cuartos">
                            <option value="">Selecciona 6to producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <!--<label>Cantidad</label>-->
                        <input name="cantidad_sexto_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Septimo producto</label>-->
                        <select name="septimo_producto" class="tres-cuartos">
                            <option value="">Selecciona 7mo producto...</option>
                            <option value="Arreglo de mesa chico">Arreglo de mesa chico</option>
                            <option value="Arreglo de mesa mediano">Arreglo de mesa mediano</option>
                            <option value="Arreglo de mesa grande">Arreglo de mesa grande</option>
                            <option value="Arreglo de escalera">Arreglo de escalera</option>
                            <option value="Arreglo de mesa principal">Arreglo de mesa principal</option>
                            <option value="Aro rectangular">Aro rectangular</option>
                            <option value="Aro circular">Aro circular</option>
                        </select>
                    </div>
                    <div class="contenedor-variables">
                        <!--<label>Cantidad</label>-->
                        <input name="cantidad_septimo_producto" class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-btn">
                    <input name="submit" type="submit" value="Registrar" class="btn-form">
                </div>
            </form>
        </section>
    </main>
</body>
</html>