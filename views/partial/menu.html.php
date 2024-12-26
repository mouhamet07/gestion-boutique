<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="asside">
        <div><img class="logo" src="./img/logo-boutique.jpg" alt="Logo" /></div>
            <nav>
                <a href="<?php echo WEBROOT; ?>?controller=client">Liste Dettes</a>
                <a href="<?php echo WEBROOT; ?>?controller=client&page=4">Enregistrer Dettes</a>
                <a href="<?php echo WEBROOT; ?>?controller=client&page=5">Enregistrer Paiement</a>
                <a href="<?php echo WEBROOT; ?>?controller=produit">Ajouter Produits</a>
                <a href="<?php echo WEBROOT; ?>?controller=client&page=7">Cumul Dettes</a>
                <a href="<?php echo WEBROOT; ?>?controller=client&page=8">Notification</a>
            </nav>
        </div>
    </div>
</body>
</html>