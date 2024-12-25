<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($page==1) {
            include_once "../views/login.html.php";
        }elseif ($page==2) {
            include_once "../views/pages/listes.html.php";
        }elseif ($page==3) {
            include_once "../views/pages/ajout_dette.html.php";
        }elseif ($page==4) {
            include_once "../views/pages/addClients.html.php";
        }elseif ($page==5) {
            include_once "../views/pages/ajout_paiement.html.php";
        }elseif ($page==6) {
            include_once "../views/pages/ajout_produit.html.php";
        }elseif ($page==7) {
            include_once "../views/pages/Cumul_dette.html.php";
        }else {
            include_once "../views/pages/notif.html.php";
        }
    ?>
</body>
</html>