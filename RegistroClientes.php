<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylefor.css">
    <link rel="stylesheet" href="CSS/formulario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>formulario</title>
</head>
<body>
    <header class="header">
        <a href="index.html" class="logo"><img src="img/timompacifico.png" class="iniciosecion" width="60px" height="60px" aria-posinset="auto"> <img src="img/nombre.png" width="200px" height="75px"></a>
      </header>
    <form>
        <h4>Formulario de Registro</h4>

        <div class="input-group">
            <label for="name">Nombre</label> 
            <input type="text" name="name" id="name" placeholder="Nombre" required>

            <label for="last name">Apellido</label>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellido" required>

            <label for="id">Número de Identificación</label>
            <input type="number" name="Numero de Identificacion" id="Numero de Identificacion" placeholder="Identificación" required>

            <label for="phone">Número de Celular</label>
            <input type="tel" name="Numero de Celular" id="Numero de Celular" placeholder="Celular" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>

            <label for="password">Contraseña</label>
            <input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña" required>

            <div class="form-txt">
                <a href="Error _404.html">Términos y Condiciones</a>
                <a href="#">¿Ya tengo Cuenta?</a>
            </div>

            <input class="botons" type="submit" value="Registrar">
        </div>
    </form>
</body>
</html>