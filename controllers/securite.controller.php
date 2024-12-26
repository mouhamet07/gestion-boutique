<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    if ($page==1) {
        include_once "../views/login.html.php";
    }else{
        header('location:'.WEBROOT.'?controller=error');
    }
?>