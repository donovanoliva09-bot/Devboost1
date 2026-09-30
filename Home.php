<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devboost - Espacio Creativo</title>
  <link rel="stylesheet" href="css/Home.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="img/logo1.png" alt="Cohete" class="icon" />
      <span>Devboost</span>
    </div>
    <nav id="main-nav">
      <div class="nav-links">
        <a href="contactus.html">Contact</a>
        <a href="aboutus.html">About Us</a>
      </div>
      <button class="menu-toggle" aria-label="Toggle menu">☰</button>
    </nav>
  </header>
  <main>
    <section class="hero">
      <div class="hero-content">
        <h1>Ignite your creativity</h1>
        <p>Boost your content with Devboost</p>
        <div class="buttons">
          <button class="login" onclick="location.href='login.php'">Login</button>
          <button class="register" onclick="location.href='register.php'">Register</button>
        </div>
      </div>
      <div class="hero-img">
        <img src="img/astronauta.png" alt="Astronauta" />
      </div>
    </section>
    <section class="features">
      <h2>What can you do?</h2>
      <div class="cards">
        <div class="card">
          <img src="img/galac.jpg" alt="Planeta" />
          <h3>Explore projects by level</h3>
          <p>On DevBoost, you can discover projects organized by difficulty level: beginner, intermediate, and advanced. This allows you to learn step by step and choose content that fits your skills.</p>
        </div>
        <div class="card">
          <img src="img/cohet.jpg" alt="Cohete" />
          <h3>Save your favorites</h3>
          <p>Found a project you loved? Add it to your favorites list so you can easily come back to it and keep learning at your own pace.</p>
        </div>
        <div class="card">
          <img src="img/tecla.jpg" alt="Planeta" />
          <h3>Customize your profile</h3>
          <p>Create an account and personalize your profile with your interests and progress. You'll get recommendations that match your level and learning goals.</p>
        </div>
      </div>
    </section>
    <section class="features">
      <h2>Features</h2>
      <div class="cards">
        <div class="card feature-card">
          <img src="img/tecla.jpg" alt="Descripción" />
          <p>Powerful real-time collaboration tools that allow your entire development team to work seamlessly together, regardless of their physical location.<br><br>
          Integration support for a wide variety of programming languages and popular frameworks to ensure flexibility and convenience.<br><br>
          Detailed analytics and reporting features designed to help monitor and optimize project workflows efficiently.<br><br>
          An active, supportive community where developers can share ideas, learn new skills, and troubleshoot challenges together.</p>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p>Created by ¡Superate! ADOC students🚀</p>
    <p>Donovan Alexis Oliva Berciano</p>
    <p>Dayana Nicole Mangandi Menjivar</p>
    <p>Carolina Giselle Elias Alvarenga</p>
    <p>Alison Fernanda Amaya Hernandez</p>
  </footer>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const toggle = document.querySelector('.menu-toggle');
      const nav = document.querySelector('#main-nav');
      
      toggle.addEventListener('click', function() {
        nav.classList.toggle('active');
      });
    });
  </script>
</body>
</html>