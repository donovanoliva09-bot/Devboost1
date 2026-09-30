<?php 
session_start();
include("conexion.php");

function getProjectById() { 
    global $conex;

    if (!isset($_GET['id'])) {
        echo "<h2>No se proporcionó un ID de proyecto.</h2>";
        return;
    }

    $id = intval($_GET['id']);

    $query = "SELECT * FROM proyectos WHERE id_proyectos = $id LIMIT 1";
    $result = mysqli_query($conex, $query);

    if (!$row = mysqli_fetch_assoc($result)) {
        echo "<h2>Proyecto no encontrado.</h2>";
        return;
    }

    $proyecto_tittle = $row['name'];
    $proyecto_img = $row['img'];
    $proyecto_desc = $row['descripcion'];
    $leng = $row['lenguaje_programacion'];
    $nivel = $row['nivel'];
    $herramientas = $row['Herramientas_utilizar'];
    $instrucciones = $row['instrucciones'];

    echo "
    <a href='#' class='back-arrow' title='Back to Projects' onclick='history.back(); return false;'>
      <svg width='36' height='36' viewBox='0 0 36 36' fill='none'>
        <circle cx='18' cy='18' r='18' fill='#3c0062'/>
        <path d='M20 12L14 18L20 24' stroke='#fff' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'/>
      </svg>
    </a>
    <h2 class='project-title'>$proyecto_tittle</h2>
    <div class='content-area'>
      <div class='project-img-area'>
        <img src='img/$proyecto_img' alt='$proyecto_tittle' class='project-img'/>
      </div>
      <div class='instructions-area'>
        <div class='info-list'>
          <div><b>Programming language</b><br>$leng</div>
          <div class='tools-list'>
            <b>Tools to use</b>
            <ul>
              $herramientas
            </ul>
          </div>
          <div>
            <b>Instructions</b>
            <ol>
              $instrucciones
            </ol>
          </div>
        </div>
        <div class='details'>
          <b>Details</b>
          <p>$proyecto_desc</p>
        </div>
        <div class='buttons-row'>
          <button class='heart-icon' aria-label='Favorito'>
            <svg width='32' height='32' viewBox='0 0 32 32'>
              <circle cx='16' cy='16' r='16' fill='#fff'/>
              <path class='heart-shape' d='M16 23s-6-4.35-6-8.13A3.13 3.13 0 0 1 16 11a3.13 3.13 0 0 1 6 3.87C22 18.65 16 23 16 23z' fill='#7c5eb7'/>
            </svg>
          </button>
        </div>
      </div>
    </div>
    ";
}
?>
