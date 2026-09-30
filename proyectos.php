
<?php 
    include("fuctionsProjects.php");
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>proyectos</title>
  <link rel="stylesheet" href="css/instruccions.css" />
</head>
<body>
  <header class="topbar">
    <div class="navbar-left">
      <a href="Welcome.php" class="logoMenu">
        <img src="img/logo2.png" alt="Devboost Logo" />
        <span class="logo-text">DevBoost</span>
      </a>
    </div>
    <h1 class="titulo-navbar"></h1>
    <div class="navbar-right">
       <span class="profile-icons">
      <a href="profile.php" title="Perfil de usuario">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
          <circle cx="16" cy="12" r="6" stroke="#fff" stroke-width="2"/>
          <rect x="6" y="22" width="20" height="6" rx="3" stroke="#fff" stroke-width="2"/>
        </svg>
      </a>
    </span>
    </div>
  </header>

  <main class="instructions-main">
     <?php 
          getProjectById();
        ?>

    <a href="https://code.visualstudio.com/" target="_blank" class="vscode-download">
      <img src="img/visual.png" alt="Visual Studio Code Logo" class="vscode-logo"/>
      <span class="vscode-text">Download visual studio code</span>
    </a>
  </main>

  <script>
    document.querySelectorAll('.heart-icon').forEach(function(btn) {
      btn.addEventListener('click', function() {
        btn.classList.toggle('active');
      });
    });
  </script>
</body>
</html>