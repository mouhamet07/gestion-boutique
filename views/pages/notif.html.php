<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/notif.css">
    <link rel="stylesheet" href="../public/css/notif.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Notifications De Dettes</h1>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Client</th>
                            <th>Numero</th>
                            <th>Montant restant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>31/10/2024</td>
                            <td>Malick Diop</td>
                            <td>78 527 04 08</td>
                            <td>10.000</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>01/11/2024</td>
                            <td>Awa Ndiaye</td>
                            <td>77 654 32 10</td>
                            <td>15.000</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>02/11/2024</td>
                            <td>Abdoulaye Faye</td>
                            <td>76 345 21 09</td>
                            <td>5.000</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>03/11/2024</td>
                            <td>Fatou Diallo</td>
                            <td>70 223 11 45</td>
                            <td>12.500</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>04/11/2024</td>
                            <td>Pape Ndiaye</td>
                            <td>78 765 44 33</td>
                            <td>20.000</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>05/11/2024</td>
                            <td>Mariama Sow</td>
                            <td>77 123 45 67</td>
                            <td>8.000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <button class="annuler" onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=2'">Annuler</button>
                    <button class="envoyer" onclick="window.location.href='<?php echo WEBROOT; ?>?controller=client&page=2'">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "../views/partial/menu.html.php";
    ?>
</body>
</html>
