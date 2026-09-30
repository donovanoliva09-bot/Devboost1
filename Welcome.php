
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome</title>
  <link rel="stylesheet" href="css/welcome.css" />
</head>
<body>
  <header class="topbar">
    <a href="Home.php" class="logoMenu">
      <img src="img/logo1.png" alt="Devboost Logo" />
      <span class="logo-text">Devboost</span>
    </a>
    <h1 class="titulo-navbar">Welcome</h1>
  </header>

  <h2 class="section-title">Select the project difficulty</h2>

  <!-- ✅ CONTENEDOR DE TARJETAS -->
  <div class="container">
    <div class="card">
      <img src="img/basic_logo.png" alt="Imagen 1" />
      <h4>🐣 Beginner</h4>
      <p>Start with the easiest projects. Perfect for beginners.</p>
      <button class="launch-btn" onclick="location.href='basic_projects.php'">Launch Project</button>
    </div>

    <div class="card">
      <img src="img/intermediate_logo.png" alt="Imagen 2" />
      <h4>🚀 Intermediate</h4>
      <p>Develop your skills with more challenging projects.</p>
      <button class="launch-btn" onclick="location.href='Intermediate_projects.php'">Launch Project</button>
    </div>

    <div class="card">
      <img src="img/avanzado_logo.png" alt="Imagen 3" />
      <h4>🧠 Advanced</h4>
      <p>Tackle complex challenges to boost your knowledge.</p>
      <button class="launch-btn" onclick="location.href='advanced-projects.php'">Launch Project</button>
    </div>
  </div> 
</body>
</html>
