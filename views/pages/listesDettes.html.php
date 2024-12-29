<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Dettes</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/listes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div  class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Listes des Dettes :</h1><br>
                <p><b><?php echo $nom; ?></b></p><br>
                <div class="search">
                <form action="<?php echo WEBROOT ?>?controller=client&page=3&id=<?php echo $_GET['id']; ?>" 
                method="get" style="display:flex; gap:10px; align-items:center">
                <input type="hidden" name="controller" value="client">
                <input type="hidden" name="page" value="3">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <div class = 'filtrer'>
                            <select name="statut" style="padding:5px">
                                <option value="tous" <?php if(!isset($_GET['statut']) || $_GET['statut'] == 'tous'){echo 'selected';} ?>>Tous</option>
                                <option value="paye" <?php if(isset($_GET['statut']) && $_GET['statut'] == 'paye'){echo 'selected';} ?>>Payes</option>
                                <option value="impaye" <?php if(isset($_GET['statut']) && $_GET['statut'] == 'impaye'){echo 'selected';} ?>>Impayes</option>
                            </select>
                        </div>
                        <button class="submitB" type="submit" >Filtrer</button>
                    </form>
                    <input type="search" name="search" id="search" placeholder="Rechercher un client" />
                    <button type="submit" id="bSearch">Rechercher</button>
                </div>
                <table class="debt-table">
                    <thead>
                        <tr>
                            <th>Ref</th>
                            <th>Montant</th>
                            <th>Montant Verse</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ($dette): ?>
                        <?php foreach ($dette as $d): ?>
                            <tr>
                                <td><?php echo $d['ref']; ?></td>
                                <td><?php echo $d['montant']; ?></td>
                                <td><?php echo $d['montantV']; ?></td>
                                <td><?php echo $d['date']; ?></td>
                                <td>
                                    <button class=" action paiement" onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=5'">Paiement</button>
                                </td>
                            </tr>
                        <?php endforeach?>
                    <?php else: ?>
                        <td colspan='5'>
                            <center>Aucune dette.</center>
                        </td>
                    <?php endif ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <?php
        include "../views/partial/menu.html.php";
    ?>
</body>
</html>
