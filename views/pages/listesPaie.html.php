<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Dettes</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/listesPaie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div  class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Listes des Paiements</h1><br>
                <p><b><?php echo $nom; ?></b> >>> Dette N: <?php echo $ref; ?></b></p><br>
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Rechercher un client" />
                    <button type="submit" id="bSearch">Rechercher</button>
                </div>
                <div class="addNew">
                    <button class="action paiement" style="margin: 10px 0px 5px 20px"
                    onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=10&id=<?php echo $id; ?>&ref=<?php echo $ref; ?>'">
                        Ajouter Paiement
                    </button>
                <table class="debt-table">
                    <thead>
                        <tr>
                            <th>Ref</th>
                            <th>Montant Verse</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ($paie): ?>
                        <?php foreach ($paie as $p): ?>
                            <tr>
                                <td><?php echo $p['ref']; ?></td>
                                <td><?php echo $p['montant']; ?></td>
                                <td><?php echo $p['date']; ?></td>
                            </tr>
                        <?php endforeach?>
                    <?php else: ?>
                        <td colspan='3'>
                            <center>Aucun paiement.</center>
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
