<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión
include("conexion.php");

// Verificar si se presionó el botón login
if (isset($_POST["login"])) {

    // Obtener datos
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validar si están vacíos
    if (empty($email) || empty($password)) {
        echo '<div style="color:red;">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        // Limpiar entradas
        $email = $conex->real_escape_string($email);
        $password = $conex->real_escape_string($password);

        // Consulta
        $sql = $conex->query("SELECT * FROM usuarios WHERE correo = '$email' AND contraseña = '$password'");

        if ($sql && $sql->num_rows > 0) {
            // Obtener datos del usuario
            $usuario = $sql->fetch_assoc();

            // Guardar datos en la sesión
            $_SESSION['id_usuario'] = $usuario['id_usuario']; // Asegúrate que tu tabla tenga una columna 'id'
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['first_name'] = $usuario['first_name']; // opcional si existe

            // Redirigir
            header("Location: Welcome.php");
            exit();
        } else {
            echo '<div style="color:red;">ACCESO DENEGADO: email o contraseña incorrectos</div>';
        }
    }
}
?>
