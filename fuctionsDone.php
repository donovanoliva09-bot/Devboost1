<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_SESSION['id_usuario'])) {
        // Validar y limpiar los datos
        $id_usuario = $_SESSION['id_usuario'];
        $id_proyecto = isset($_POST['id_proyectos']) ? intval($_POST['id_proyectos']) : 0;

        if ($id_proyecto <= 0) {
            echo "❌ ID de proyecto inválido.";
            exit;
        }

        // Usar consultas preparadas para seguridad
        // Verificar si ya existe
        $check = $conex->prepare("SELECT * FROM proyectos_creados WHERE id_usuario = ? AND id_proyectos = ?");
        $check->bind_param("ii", $id_usuario, $id_proyecto);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "⚠️ Este proyecto ya fue marcado como completado.";
        } else {
            // Insertar nuevo registro
            $insert = $conex->prepare("INSERT INTO proyectos_creados (id_usuario, id_proyectos) VALUES (?, ?)");
            $insert->bind_param("ii", $id_usuario, $id_proyecto);
            
            if ($insert->execute()) {
                echo "✅ Proyecto guardado correctamente.";
            } else {
                echo "❌ Error al guardar el proyecto: " . $conex->error;
            }
        }
    } else {
        echo "⚠️ Debes iniciar sesión para continuar.";
    }
} else {
    echo "Acceso no válido.";
}
?>