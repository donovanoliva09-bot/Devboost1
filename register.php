<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account - Devboost</title>
  <link rel="stylesheet" href="css/Styles.css">
</head>
<body>
  <div class="container">
    <div class="left-section">
      <div class="overlay">
        <img src="img/Register_persona.png" alt="Imagen de alguien haciendo codigos">
      </div>
    </div>
    <div class="right-section">
      <div class="logo">
        <img src="img/logo2.png" alt="Devboost Logo"> 
        <h2>Devboost</h2>
        <p>Ignite your creativity.<br>Boost your content.</p>
      </div>
      <form class="register-form" method = "POST">
        <h2>CREATE ACCOUNT</h2>
        <div class="input-group">
          <input type="text" name = "name" placeholder="First name" required>
          <input type="text" name = "lastName" placeholder="Last name" required>
        </div>
        <input type="email" name = "email" placeholder="E-mail" required>
        <input type="password" name = "password" placeholder="Password" required>
        <button type="submit" class="btn" name = "register">CREATE ACCOUNT</button>
        <p class="login-link">Already have an account? <a href="login.php">Log in</a></p>
      </form>
    </div>
  </div>
  
  <?php 
     include("Registro.php")
  ?>

</body>
</html>
