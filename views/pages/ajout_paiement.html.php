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
                    <div class="infos">
                        <div class="nom">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez le nom du client">
                        </div>
                        <div class="prenom">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Entrez le prénom du client">
                        </div>
                        <div class="tel">
                            <label for="tel">Téléphone</label>
                            <input type="tel" name="tel" id="tel" placeholder="Entrez le numéro du client">
                        </div>
                        <div class="buttons">
                            <button class="btn annuler" onclick="window.location.href='listes.html'">Annuler</button>
                            <button class="btn enregistrer" >Rechercher</button>
                        </div>
                    </div>
                    <div class="dette-paiement">
                        <div class="dette">
                            <h2>Dette de : Fatou Diop</h2>
                            <div><span>Date:</span> <span>...</span></div>
                            <div><span>Montant:</span> <span>...</span></div>
                            <div><span>Versé:</span> <span>...</span></div>
                            <div><span>Restant:</span> <span>...</span></div>
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
    </div>
    <?php
        include "../views/partial/menu.html.php";
    ?>
</body>
</html>
