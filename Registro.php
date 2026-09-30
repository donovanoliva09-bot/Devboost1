<?php
session_start();
include("conexion.php");
if (isset($_POST['register'])) {
    if(
        strlen($_POST['name' ]) >= 1 &&
        strlen($_POST['lastName']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1
       ) {
            $name = trim($_POST['name']);
            $lastName = trim($_POST['lastName']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO usuarios( first_name, last_name, correo, contraseña)
                VALUES ( '$name', '$lastName', '$email', '$password')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                header ("location: Welcome.php")
             ?>
                <h3 class="success" >Tu resgistro se a completado</h3>
             <?php
            } else {
             ?>
                <h3 class="error">Ocurrio un error</h3>
             <?php
            }
        } else {
            ?>
                <h3 class="error">Llena todos los campos </h3>
            <?php
        }
}
?>