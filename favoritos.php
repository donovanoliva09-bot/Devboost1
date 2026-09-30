<?php
session_start();
include("conexion.php");

// Asegurarse que el usuario está logueado
if (!isset($_SESSION['id_usuario'])) {
    echo "You don't have any favorite projects.";
    exit;
}

$id_usuario = $_SESSION['id_usuario'];

// Obtener los proyectos favoritos del usuario
$query = "
    SELECT p.*
    FROM proyectos_favoritos pf
    JOIN proyectos p ON pf.id_proyectos = p.id_proyectos
    WHERE pf.id_usuario = $id_usuario
";
$result = mysqli_query($conex, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DevBoost - Basic Projects</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/projects.css">
</head>
<body>
  <div class="container">
    <header>
      <nav class="navbar">
        <div class="logo-area">
           <a href="welcome.php" class="logo-link">
          <img src="img/logo2.png" alt="Logo" class="logo-img"/>
           </a>
          <span class="logo-text">DevBoost</span>
        </div>
        <div class="navbar-">
          <span class="nav-link active">favorites</span>
    </span>
        </div>
      </nav>
    </header>


    <main>
  <!-- Flecha para regresar al selector de dificultad -->
  <div style="padding-left:24px; margin-bottom:0;">
    <a href="#" class="back-arrow" title="Back to Select Difficulty" onclick="history.back(); return false;">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <circle cx="18" cy="18" r="18" fill="#3c0062"/>
        <path d="M20 12L14 18L20 24" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  </div>
</main>
      <section class="projects">
        <?php
    while ($row = mysqli_fetch_array($result)) {
        $proyecto_id = $row['id_proyectos'];
        $proyecto_tittle = $row['name'];
        $proyecto_img = $row['img'];
        $proyecto_desc = $row['descripcion'];
        $leng = $row['lenguaje_programacion'];
        $nivel = $row['nivel'];
        $herramientas = $row['Herramientas_utilizar'];
        $instrucciones = $row['instrucciones'];

        echo "
        <!-- Tarjeta de proyecto -->
        <div class='project-card'>
          <div class='card-img-area'>
            <img src='img/$proyecto_img' alt='$proyecto_tittle' class='card-img'/>
            <button class='heart-icon' aria-label='Favorito'>
              <svg width='32' height='32' viewBox='0 0 32 32'>
                <circle cx='16' cy='16' r='16' fill='#fff'/>
                <path class='heart-shape' d='M16 23s-6-4.35-6-8.13A3.13 3.13 0 0 1 16 11a3.13 3.13 0 0 1 6 3.87C22 18.65 16 23 16 23z' fill='#8719c4'/>
              </svg>
            </button>
          </div>

          <div class='card-content'>
            <h3 class='card-title'>$proyecto_tittle</h3>
            <p class='card-desc'>$proyecto_desc</p>
            <p><strong>Lenguaje:</strong> $leng</p>
            <p><strong>Nivel:</strong> $nivel</p>
            <div class='card-buttons'>
              <button class='launch-btn' onclick=\"location.href='proyectos.php?id=$proyecto_id'\">Show Project</button>
            </div>
          </div>
        </div>
        ";
    }

    if (mysqli_num_rows($result) == 0) {
        echo "<p style='text-align:center;'>You haven't completed any projects yet.</p>";
    }
    ?>
      </section>
    </main>
    <script>
  document.querySelectorAll('.heart-icon').forEach(function(btn) {
    btn.addEventListener('click', function() {
      btn.classList.toggle('active');
      
    });
  });
</script>
  </div>
</body>
</html>

