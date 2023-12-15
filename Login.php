<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="JS/js.js" type="text/javascript"></script>
    
    <title>Formulario de registro</title>
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo"><img src="img/timompacifico.png" class="iniciosecion" width="60px" height="60px"> <img src="img/nombre.png" width="200px" height="75px"></a>
        </ul>
      </header>
	<!-- Wrapper -->
	<div class="wrapper">
		
		
		<!-- Formulario -->
		<form action="logear.php" method="post" class="login" id="login">
			<h2>Iniciar Sesión</h2>
			
			<!-- Contenedor del Formulario -->
			<div class="login-container">
				<label for="username">Usuario</label>
				<input type="text" id="username" required placeholder="Ingresar Usuario">
				
				<label for="password">Contraseña</label>
				<input type="password" id="password" required placeholder="Ingresar Contraseña">
                             
				<input type="submit" value="login" class="primary_action">
			</div>
		</form>
	</div>
        

</body>
</html>