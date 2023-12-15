<?php
// Llama el método de conexión a la base de datos
include 'ConectBD.php';

// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener las credenciales del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lógica de autenticación.
    // Verificar los datos en una base de datos.
    $sql = "SELECT 1 FROM persona WHERE Documento = :username AND contraseña = :password";

    $query = $connect->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();

    // Verificar si se encontraron coincidencias
    if ($query->fetch(PDO::FETCH_ASSOC)) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>alert('Inicio de sesión exitoso');</script>";
        // Redirigir a la página de administración.
        echo "<script>window.location.replace('panel-administrador.php');</script>";
        exit(); // Importante: detener la ejecución del script después de redirigir
    } else {
        // Autenticación fallida, muestra un mensaje de error.
        echo "<script>alert('Nombre de usuario y/o contraseña incorrectos');"
            . "window.location.replace('Login.php');</script>";
    }
}
?>
