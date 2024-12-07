<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cumul des Dettes</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/cumDette.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div  class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            </div>
            <div class="page">
                <h1>Cumul des Dettes</h1>
                <p><strong>Filtre</strong></p>
                <div class="filtre">
                    <div class="filtrerTout">Tout</div>
                    <div class="auj">Aujourd'hui</div>
                    <div class="sem">Semaines</div>
                    <div class="mois">Mois</div>
                </div>
                <table class="debt-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Client</th>
                            <th>Numero</th>
                            <th>Montant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>03/11/2024</td>
                            <td>Malick Diop</td>
                            <td>78 527 04 08</td>
                            <td>30.000 CFA</td>
                        </tr>
                        <tr>
                            <td>01/11/2024</td>
                            <td>Aicha Ndiaye</td>
                            <td>77 832 23 34</td>
                            <td>120.000 CFA</td>
                        </tr>
                        <tr>
                            <td>30/10/2024</td>
                            <td>Almamy Thiam</td>
                            <td>77 932 25 67</td>
                            <td>320.000 CFA</td>
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
