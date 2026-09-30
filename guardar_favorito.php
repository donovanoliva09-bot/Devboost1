<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['id_usuario']) || !isset($_POST['id_proyectos'])) {
    echo "Error: Faltan datos o no has iniciado sesión.";
    exit;
}

$id_usuario = $_SESSION['id_usuario'];
$id_proyecto = $_POST['id_proyectos'];

// Verificar si ya está en favoritos
$check = "SELECT * FROM proyectos_favoritos WHERE id_usuario = $id_usuario AND id_proyectos = $id_proyecto";
$result = mysqli_query($conex, $check);

if (mysqli_num_rows($result) > 0) {
    // Eliminar si ya está
    $delete = "DELETE FROM proyectos_favoritos WHERE id_usuario = $id_usuario AND id_proyectos = $id_proyecto";
    mysqli_query($conex, $delete);
} else {
    // Insertar si no está
    $insert = "INSERT INTO proyectos_favoritos (id_usuario, id_proyectos) VALUES ($id_usuario, $id_proyecto)";
    mysqli_query($conex, $insert);

}
?>
