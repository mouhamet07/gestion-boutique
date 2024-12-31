<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Paiement</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/addPaiement.css">
    <link rel="stylesheet" href="../public/css/addPaiement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Ajout D'un Paiement</h1>
                <div class="content">
                    <div class="dette">
                        <?php $reste = $d['montant'] - $d['montantV'] ?>
                        <h2>Dette de : <?php echo $nom; ?></h2>
                        <div class="infos-dette">
                            <div>
                                <p><b>Date : </b><?php echo $d['date'];?></p>
                            </div>
                            <div>
                                <p><b>Montant :</b> <?php echo $d['montant'];?></p>
                            </div>
                            <div>
                                <p><b>Versé :</b> <?php echo $d['montantV'];?></p>
                            </div>
                            <div>
                                <p><b>Restant :</b> <?php echo $reste;?></p>   
                            </div>
                        </div>
                    </div>
                    <div class="paiement">
                        <h2>Enregistrement Du Paiement</h2>
                        <div>
                            <label for="montant">Montant</label>
                            <input type="number" id="montant" placeholder="Montant à payer">
                        </div>
                        <div class="buttons">
                            <button class="btn annuler" onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=2'">Annuler</button>
                            <button class="btn enregistrer" onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=2'">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "../views/partial/menu.html.php";
    ?>
</body>
</html>
