<?php
    session_start();
    include_once "../model/users.model.php";
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        $isAuthenticated = false;
        foreach ($users as $user) {
            if ($user['username'] === $login && $user['password'] === $password) {
                $_SESSION['username'] = $user['name'];
                $isAuthenticated = true;
                break;
            }
        }
        if ($isAuthenticated) {
            header("Location: " . WEBROOT . "?controller=client");
            exit;
        } else {
            $error = "Email ou mot de passe incorrect.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="shortcut icon" href="img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
    <div class="logForm">
        <h3>Connectez Vous</h3>
        <?php if (!empty($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="inputs">
                <input type="email" name="login" id="login" required placeholder="Email">                
                <input type="password" name="password" id="password" required placeholder="Mot de passe">
            </div>
            <div class="fpassword">
                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
            </div>
            <div class="button">
                <button type="reset">Annuler</button>
                <button type="submit">Connexion</button>
            </div>            
        </form>
    </div>
</body>
</html>
