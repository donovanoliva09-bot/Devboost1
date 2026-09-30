<?php 
     $conex =new mysqli("localhost","root","","devboost");
     $conex -> set_charset("utf8");

     if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}

  ?>
