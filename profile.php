<?php
session_start();
include("conexion.php"); // tu archivo de conexión a la BD

// Verificar si el usuario está logueado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}

$id_usuario = $_SESSION['id_usuario'];

// Consulta para obtener los datos
$sql = "SELECT first_name, last_name, correo, img FROM usuarios WHERE id_usuario = '$id_usuario'";
$resultado = mysqli_query($conex, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);
} else {
    echo "No data found.";
    exit;
}

// Mostrar mensajes de éxito/error
if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DevBoost - Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
</head>
<body>
  <div class="container">
    <header>
      <nav class="navbar">
        <div class="logo-area">
          <a href="Home.php" class="logo-link">
            <img src="img/logo2.png" alt="Logo" class="logo-img"/>
          </a>
          <span class="logo-text">DevBoost</span>
        </div>
      </nav>
    </header>
    
    <main>
      <?php if (isset($success_message)): ?>
        <div class="success-message"><?php echo $success_message; ?></div>
      <?php endif; ?>
      <?php if (isset($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
      <?php endif; ?>
      
      <a href="#" class="back-arrow" title="Back" onclick="history.back(); return false;">
        <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
          <circle cx="18" cy="18" r="18" fill="#3c0062"/>
          <path d="M20 12L14 18L20 24" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <h1 class="profile-title">PROFILE</h1>
      <form class="profile-form" action="upload_photo.php" method="post" enctype="multipart/form-data">
        <div class="profile-img-area">
          <img src="<?php echo $usuario['img'] ?: 'img/default.png'; ?>" alt="User Photo" class="profile-img"/>
          <label for="upload-photo" class="camera-icon">
            <svg width="36" height="36" viewBox="0 0 36 36">
              <circle cx="18" cy="18" r="18" fill="#232323"/>
              <path d="M23 21H13a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1l1-2h6l1 2h1a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2z" fill="#fff"/>
              <circle cx="18" cy="18" r="2" fill="#3c0062"/>
            </svg>
            <input type="file" id="upload-photo" name="upload-photo" accept="image/*" style="display:none"/>
          </label>
        </div>
        <div class="profile-fields">
          <label>
            USER NAME
            <input type="text" name="username" class="profile-input" value="<?php echo htmlspecialchars($usuario['first_name'] . ' ' . $usuario['last_name']); ?>" readonly/>
            </span>
          </label>
          <label>
            E-MAIL
            <input type="email" name="email" class="profile-input" value="<?php echo htmlspecialchars($usuario['correo']); ?>" readonly/>
          </label>
          <label>
            PASSWORD
            <input type="password" name="password" class="profile-input" value="********" readonly/>
          </label>
        </div>
      </form>
      <div class="logout-area">
        <a href="logout.php" class="logout-link">Log out</a>
      </div>
    </main>
  </div>
  
  <script>
  document.getElementById('upload-photo').addEventListener('change', function() {
      if(this.files && this.files[0]) {
          // Mostrar vista previa de la imagen
          var reader = new FileReader();
          reader.onload = function(e) {
              document.querySelector('.profile-img').src = e.target.result;
          }
          reader.readAsDataURL(this.files[0]);
          
          // Enviar el formulario automáticamente
          document.querySelector('.profile-form').submit();
      }
  });
  </script>
</body>
</html>