<?php
    include_once "../model/clients.model.php";
    $clients = selectClients();
    $page = isset($_GET['page']) ? $_GET['page'] : 2;
    if ($page==2) {
        include_once "../views/pages/listes.html.php";
    }elseif ($page==3) {
        if (isset($_GET['id']) && is_numeric($_GET['id']) ) {
            $id = $_GET['id'];
            $c = selectDettes($clients, $id);
            $dette = $c['dette'];
            $nom = $c['nom'];
            $statut = isset($_GET['statut']) ? $_GET['statut']:'tous';
            if ($c) {
                $dette_filtre= filtreDettes($dette);
                $dette_paye = $dette_filtre['paye'];
                $dette_impaye = $dette_filtre['impaye'];
                if ($statut == 'paye') {
                    $dette =  $dette_paye;
                }elseif ($statut == 'impaye') {
                    $dette =  $dette_impaye;
                }
                include_once "../views/pages/listesDettes.html.php";
            }else {
                header('location:'.WEBROOT.'?controller=error');
            }
        }else {
            header('location:'.WEBROOT.'?controller=error');
        }
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