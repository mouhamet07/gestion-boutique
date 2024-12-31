<?php
    include_once "../model/clients.model.php";
    $page = isset($_GET['page']) ? $_GET['page'] : 2;
    if (isset($_GET['id']) && is_numeric($_GET['id']) ) {
        $id = $_GET['id'];
        $c = selectDettes($clients, $id);
        $dette = $c['dette'];
        $nom = $c['nom'];
        $statut = isset($_GET['statut']) ? $_GET['statut']:'tous';
    }
    if ($page==2) {
        include_once "../views/pages/listes.html.php";
    }elseif ($page==3) {
        if (isset($_GET['id']) && is_numeric($_GET['id']) ) {
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
    }elseif ($page == 5) {
        include_once "../views/pages/dette.html";
    }elseif ($page==7) {
        include_once "../views/pages/Cumul_dette.html.php";
    }elseif ($page==8) {
        include_once "../views/pages/notif.html.php";
    }elseif($page==9){
        if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['ref'])) {
            $ref = $_GET['ref'];
            $result = selectPaie($dette, $ref);
            $paie = $result['paie'];
            if ($c && $result['ref_d']) {
                include_once "../views/pages/listesPaie.html.php";
            }else {
                header('location:'.WEBROOT.'?controller=error');
            }
        }else {
            header('location:'.WEBROOT.'?controller=error');
        }
    }elseif($page==10){
        if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['ref'])){
            $ref = $_GET['ref'];
            $result = selectPaie($dette, $ref);
            $d = $result['dette'];
            $montant = isset($_POST['montant']) ? intval($_POST['montant']) : 0;
            $reste = $d['montant'] - $d['montantV'];
            if ($montant > 0 && $reste >= $montant){
                $paie = createPaie($d,$montant,$id);
                $insertPaie = insererPaiement($clients,$ref,$id,$paie);
            }else {
                $error = 'Montant incorrect ou superieur au montant du.';
            }
            if($c && $ref){
                include_once "../views/pages/paiement.html.php";
            }
        }else{
            header('location:'.WEBROOT.'?controller=error');
        }
    }else{
        header('location:'.WEBROOT.'?controller=error');
    }
?>