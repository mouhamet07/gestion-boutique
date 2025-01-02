<?php
    session_start();
    $username = $_SESSION['username'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <div class="search">
            <input type="search" name="search" id="search" placeholder="Saisir votre recherche" />
            <i class="fas fa-search"></i>
        </div>
        <div class="subnav">
            <i class="fas fa-user"></i> 
            <div class="login">
                <p><?php echo $username ?></p>
                <a href="<?php echo WEBROOT; ?>?controller=security">(Déconnexion)</a>
            </div>
        </div>
    </div>
</body>
</html>