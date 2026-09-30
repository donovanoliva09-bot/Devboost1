<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Devboost</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>
  <div class="container">
    <div class="login-section">
      <div class="logo">
        <img src="img/logo2.png" alt="Logo" />
        <h2>Devboost</h2>
        <p>Ignite your creativity.<br/>Boost your content.</p>
      </div>

      <h1>LOGIN</h1>
      <form method = "POST">
        <input type="email" name = "email" placeholder="Email" required />
        <input type="password" name = "password" placeholder="Password" required />
        <div class="options">
          <label><input type="checkbox" checked> keep me logged in</label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" name = "login">Login</button>

        <p class="signup">Don’t have an account? <a href="register.php">create account</a></p>

         <?php 
             include("controlador_login.php");
          ?>

      </form>
  
    </div>

    <div class="welcome-section">
      <div class="overlay">
        <img src="img/loginPersona.png" alt="Imagen de alguien haciendo codigos">
      </div>
    </div>
  </div>
</body>
</html>
