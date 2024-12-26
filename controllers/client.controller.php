<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 2;
    if ($page==2) {
        include_once "../views/pages/listes.html.php";
    }elseif ($page==3) {
        include_once "../views/pages/ajout_dette.html.php";
    }elseif ($page==4) {
        include_once "../views/pages/addClients.html.php";
    }elseif ($page==5) {
        include_once "../views/pages/ajout_paiement.html.php";
    }elseif ($page==7) {
        include_once "../views/pages/Cumul_dette.html.php";
    }elseif ($page==8) {
        include_once "../views/pages/notif.html.php";
    }else{
        header('location:'.WEBROOT.'?controller=error');
    }
?>