<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Panel de Administrador</title>
</head>

<body>
    <div class="page-wrap">
        <nav class="project-tab" id="tabs">
            <div class="container">
                <h1 class="section-title text-light">Panel de Administrador</h1>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-inventario-tab" data-toggle="tab" href="#nav-inventario" role="tab" aria-controls="nav-inventario" aria-selected="true">INVENTARIO</a>
                    
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-success">Registrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div></li>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-clientes-tab" data-toggle="tab" href="#nav-clientes" role="tab" aria-controls="nav-clientes" aria-selected="false">CLIENTES</a>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-success">Registrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div></li>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-ordenes-tab" data-toggle="tab" href="#nav-ordenes" role="tab" aria-controls="nav-ordenes" aria-selected="false">ORDENES</a>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-success">Registrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div></li>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-menu-tab" data-toggle="tab" href="#nav-menu" role="tab" aria-controls="nav-menu" aria-selected="false">MENU</a>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-success">Registrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div></li>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-domicilios-tab" data-toggle="tab" href="#nav-domicilios" role="tab" aria-controls="nav-domicilios" aria-selected="false">DOMICILIOS</a>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-success">Registrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div></li>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Otro contenido de la página aquí -->

    <!-- Incluye los scripts de Bootstrap y jQuery al final del cuerpo del documento para un mejor rendimiento -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function () {
        $(".nav-link").on("click", function () {
            // Oculta todos los elementos
            $(".btn-group, .input-group").hide();

            // Muestra los elementos según la opción de navegación seleccionada
            var tabId = $(this).attr("href");
            $(tabId + " .btn-group, " + tabId + " .input-group").show();
        });
    });
</script>
</body>

</html>
