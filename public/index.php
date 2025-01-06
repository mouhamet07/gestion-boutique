<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Dette</title>
</head>
<body>
    <?php
    define ("WEBROOT", "http://www.mouhamet-thiam.ism.edu.sn/index.php");
        $controller = isset($_GET['controller']) ? $_GET['controller'] : "security";
        //var_dump($controller);
        //die();
        if ($controller=="security") {
            include_once "../controllers/securite.controller.php";
        }elseif ($controller=="client") {
            include_once "../controllers/client.controller.php";
        }elseif ($controller=="produit") {
            include_once "../controllers/produit.controller.php";
        }elseif ($controller=="error") {
            include_once "../controllers/error.controller.php";
        }else{
            include_once "../controllers/securite.controller.php";
        }
    ?>
</body>
</html>