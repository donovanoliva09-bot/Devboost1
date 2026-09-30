<?php 
    include("fuctionsintermedio.php");
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
        
        <div class="navbar-right">
          <button class="hamburger-btn" aria-label="Menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M3 12H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3 6H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3 18H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          
          <div class="navbar-menu">
            <a href="favoritos.php" class="nav-link">favorites</a>
            <a href="Done.php" class="nav-link">Your completed projects</a>
            <span class="nav-link active">Intermediate projects</span>
            <a href="profile.php" class="profile-icon" title="User Profile">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                <circle cx="16" cy="12" r="6" stroke="#fff" stroke-width="2"/>
                <rect x="6" y="22" width="20" height="6" rx="3" stroke="#fff" stroke-width="2"/>
              </svg>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div style="padding-left:24px; margin-bottom:0;">
        <a href="welcome.php" class="back-arrow" title="Back to Select Difficulty">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
            <circle cx="18" cy="18" r="18" fill="#3c0062"/>
            <path d="M20 12L14 18L20 24" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      
      <section class="projects">
        <?php 
          getProducts();
        ?>
      </section>
    </main>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Menú hamburguesa
        const hamburgerBtn = document.querySelector('.hamburger-btn');
        const navbarMenu = document.querySelector('.navbar-menu');
        
        hamburgerBtn.addEventListener('click', function() {
          navbarMenu.classList.toggle('show');
          hamburgerBtn.classList.toggle('active');
        });

        // Corazones de favoritos
        document.querySelectorAll('.heart-icon').forEach(function(btn) {
          btn.addEventListener('click', function() {
            btn.classList.toggle('active');
          });
        });
      });
    </script>
  </div>
</body>
</html>
