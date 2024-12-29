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
                <h1>Listes des Dettes</h1>
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Rechercher un client" />
                    <button type="submit" id="bSearch">Rechercher</button>
                </div>
                <table class="debt-table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Adresse</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clients as $client):?>
                            <tr>
                                <td><?php echo $client['nom']; ?></td>
                                <td><?php echo $client['prenom']; ?></td>
                                <td><?php echo $client['tel']; ?></td>
                                <td><?php echo $client['ad']; ?></td>
                                <td>
                                    <button class=" action paiement" 
                                        onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=3&id=<?php echo $client['id']; ?>'">
                                        Dettes
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach?>
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
