<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 6;
    if ($page==6) {
        include_once "../views/pages/ajout_produit.html.php";
    }else{
        header('location:'.WEBROOT.'?controller=error');
    }
?>