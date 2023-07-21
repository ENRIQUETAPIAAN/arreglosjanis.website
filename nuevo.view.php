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
                        <input class="mitad" type="text" placeholder="Nombre:">
                    </div>
                    <div class="contenedor-variables">
                        <label>Teléfono</label>
                        <input class="mitad" type="tel" placeholder="Teléfono:">
                    </div>
                </div>
                
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Lugar del evento</label>
                        <input class="dos-cuartos" type="text" placeholder="Lugar:">
                    </div>
                    <div class="contenedor-variables">
                        <label>Fecha del evento</label>
                        <input class="un-cuarto" type="date">
                    </div>
                    <div class="contenedor-variables">
                        <label>Hora de inicio</label>
                        <input class="un-cuarto" type="time">
                    </div>
                </div>
                
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Ubicación del evento</label>
                        <input class="uno" type="text" placeholder="Ubicación:">
                    </div>
                        <!--<input type="submit" value="Registrar" class="btn-form">-->
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <label>Productos</label>
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Segundo producto</label>-->
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Tercer producto</label>-->
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Cuarto producto</label>-->
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Quinto producto</label>-->
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Sexto producto</label>-->
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-tarjetas">
                    <div class="contenedor-variables">
                        <!--<label>Septimo producto</label>-->
                        <select class="tres-cuartos">
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
                        <input class="un-cuarto" type="number" placeholder="Cantidad:">
                    </div>
                </div>
                <div class="contenedor-btn">
                    <input type="submit" value="Registrar" class="btn-form">
                </div>
            </form>
        </section>
    </main>
</body>
</html>