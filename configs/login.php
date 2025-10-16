<?php
$loginMessage = '';
$validUsername = 'admin';
$validPassword = 'rockyou';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $validUsername && $password === $validPassword) {
        $loginMessage = '<div class="message success">✅ Connexion réussie. Bienvenue, ' . htmlspecialchars($username) . ' !</div>';
    } else {
        http_response_code(401);
        $loginMessage = "<div class='message error'>❌ Identifiants incorrects. Veuillez réessayer.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <style>
 
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(52, 152, 219, 0.9); 
      padding: 0.4rem 1.2rem;
      color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 1.1rem;       
      font-weight: 400;        
      text-decoration: none;
      color: white;
    }

    .nav-items {
      display: flex;
      gap: 1rem;
    }

    .nav-link {
      text-decoration: none;
      color: white;
      font-size: 0.95rem;
      padding: 0.4rem 0.6rem;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .container {
      max-width: 400px;
      margin: 80px auto;
      padding: 2rem;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      margin-bottom: 0.4rem;
      font-weight: 500;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 0.6rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }

    input[type="submit"] {
      width: 100%;
      padding: 0.6rem;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #2980b9;
    }

    .message {
      margin-top: 1rem;
      padding: 0.8rem;
      border-radius: 4px;
      font-size: 0.95rem;
      text-align: center;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }
  </style>
</head>
<body>

  <nav class="navbar">

    <div class="nav-items">
      <a href="index.php" class="nav-link">Ping</a>
      <a href="login.php" class="nav-link">Login</a>
    </div>

    <a href="#" class="navbar-brand">Menu</a>
  </nav>

    <div class="container">
    <h2 style="text-align:center; margin-bottom: 1.5rem;">Connexion</h2>

    <form method="POST" action="login.php" name="login">
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
      </div>

      <input type="submit" value="Se connecter">
      <?php if (!empty($loginMessage)) echo $loginMessage; ?>
    </form>
  </div>
</body>
</html>
