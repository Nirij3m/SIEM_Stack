<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
$result = '';
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = trim($_POST['ip']);
    // Vulnerable function with improper input validation
    $result = shell_exec("ping -c 4 " . $ip);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ping une IP</title>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }   
        body {
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
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
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: 60px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        pre {
            background: #222;
            color: #0f0;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
            white-space: pre-wrap;
        }

        .error {
            color: red;
            margin-bottom: 15px;
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
        <h2>Ping une adresse IP !</h2>
        <form method="post" action="">
            <?php if ($error): ?>
                <div class="error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <input type="text" name="ip" placeholder="127.0.0.1" required>
            <input type="submit" value="Ping !">
        </form>

        <?php if ($result): ?>
            <h3>Résultat du ping :</h3>
            <pre><?= htmlspecialchars($result) ?></pre>
        <?php endif; ?>
    </div>
</body>
</html>
