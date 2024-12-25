<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Dettes</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/listes.css">
    <link rel="stylesheet" href="../public/css/listes.css">
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
                            <th>Date</th>
                            <th>Client</th>
                            <th>Montant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>03/11/2024</td>
                            <td>Malick Diop</td>
                            <td>30.000 CFA</td>
                            <td>
                                <button class=" action paiement" onclick="window.location.href='http://www.mouhamet-thiam.ism.edu.sn/index.php?page=5'">Paiement</button>
                                <button class="action cancel" onclick="window.location.href='http://www.mouhamet-thiam.ism.edu.sn/index.php?page=5'">Annuler</button>
                            </td>
                        </tr>
                        <tr>
                            <td>01/11/2024</td>
                            <td>Aicha Ndiaye</td>
                            <td>120.000 CFA</td>
                            <td>
                                <button class="action paiement">Paiement</button>
                                <button class="action cancel">Annuler</button>
                            </td>
                        </tr>
                        <tr>
                            <td>30/10/2024</td>
                            <td>Almamy Thiam</td>
                            <td>320.000 CFA</td>
                            <td>
                                <button class="action paiement">Paiement</button>
                                <button class="action cancel">Annuler</button>
                            </td>
                        </tr>
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
