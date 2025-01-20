<?php include_once "../model/clients.model.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cumul des Dettes</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/cumDette.css">
    <link rel="stylesheet" href="../public/css/cumDette.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div  class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Cumul des Dettes</h1>
                <table class="debt-table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Montant</th>
                            <th>Montant Verse</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($clients) && count($clients) > 0):?>
                            <?php foreach($clients as $c):?>
                                <?php $mnt = getMnt($c['dette'])?>
                                <?php if($mnt['dette'] > 0):?>
                                    <tr>
                                        <td><?php echo $c['nom']?></td>
                                        <td><?php echo $c['prenom']?></td>
                                        <td><?php echo $mnt['dette']?>CFA</td>
                                        <td><?php echo $mnt['paie']?>CFA</td>
                                    </tr>
                                <?php endif ?>
                            <?php endforeach;?>
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
