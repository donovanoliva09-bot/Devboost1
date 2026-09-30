<?php 
session_start();
include("conexion.php");

function getProducts() { 
    global $conex;

    if(!isset($_SESSION['id_usuario'])){
        die("Error: No se ha iniciado sesión o falta el id_usuario");
    }
    $id_usuario = $_SESSION['id_usuario']; 

    $get_proyects = "SELECT * FROM proyectos WHERE nivel = 'Advanced'";
    $run_proyects = mysqli_query($conex, $get_proyects);

    while ($row = mysqli_fetch_array($run_proyects)) {
        $proyecto_id = $row['id_proyectos'];
        $proyecto_tittle = $row['name'];
        $proyecto_img = $row['img'];
        $proyecto_desc = $row['descripcion'];
        $leng = $row['lenguaje_programacion'];
        $nivel = $row['nivel'];
        $herramientas = $row['Herramientas_utilizar'];
        $instrucciones = $row['instrucciones'];

        $check_sql = "SELECT * FROM proyectos_creados WHERE id_usuario = $id_usuario AND id_proyectos = $proyecto_id";
        $check_result = mysqli_query($conex, $check_sql);
        $ya_guardado = mysqli_num_rows($check_result) > 0;

        $fav_sql = "SELECT 1 FROM proyectos_favoritos WHERE id_usuario = $id_usuario AND id_proyectos = $proyecto_id";
        $fav_result = mysqli_query($conex, $fav_sql);
        $es_favorito = mysqli_num_rows($fav_result) > 0;

       echo "
         <!-- Tarjeta de proyecto -->
         <div class='project-card'>
           <div class='card-img-area'>
             <img src='img/$proyecto_img' alt='$proyecto_tittle' class='card-img'/>
             <button class='heart-icon " . ($es_favorito ? "active" : "") . "' aria-label='Favorito' data-id='$proyecto_id'>
               <svg width='32' height='32' viewBox='0 0 32 32'>
                 <circle cx='16' cy='16' r='16' fill='#fff'/>
                 <path class='heart-shape' d='M16 23s-6-4.35-6-8.13A3.13 3.13 0 0 1 16 11a3.13 3.13 0 0 1 6 3.87C22 18.65 16 23 16 23z'/>
               </svg>
             </button>
           </div>
           <div class='card-content'>
             <h3 class='card-title'>$proyecto_tittle</h3>
             <p class='card-desc'>$proyecto_desc</p>
             <p><strong>Lenguaje:</strong> $leng</p>
             <p><strong>Nivel:</strong> $nivel</p>
             <div class='card-buttons'>
               <button class='launch-btn' onclick=\"location.href='proyectos.php?id=$proyecto_id'\">Launch Project</button>";
      
               if (!$ya_guardado) {
                 echo "<button class='done-btn' data-id='$proyecto_id'>DONE</button>";
               }

         echo "  </div>
           </div>
         </div>
         ";

    }

    echo "
    <script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.done-btn').forEach(button => {
    button.addEventListener('click', () => {
      const proyectoId = button.getAttribute('data-id');

      fetch('fuctionsDone.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id_proyectos=' + proyectoId
      })
      .then(res => res.text())
      .then(data => {
        if (data.includes('Guardado') || data.includes('Ya guardado')) {
          button.style.display = 'none';
        }
      })
      .catch(err => console.error('Error en la solicitud:', err));
    });
  });

  document.querySelectorAll('.heart-icon').forEach(button => {
    button.addEventListener('click', () => {
      const proyectoId = button.getAttribute('data-id');

      fetch('guardar_favorito.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id_proyectos=' + proyectoId
      })
      .then(res => res.text())
      .then(data => {
        button.classList.toggle('active');
        // No se mostrará ningún mensaje aquí.
      })
      .catch(err => console.error('Error al actualizar favorito:', err));
    });
  });
});
</script>

    ";
}
?>
