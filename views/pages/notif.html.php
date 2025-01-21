<?php include_once "../model/clients.model.php"?>
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
                            <th>Date</th>
                            <th>Client</th>
                            <th>Numero</th>
                            <th>Montant restant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($clients) && count($clients) > 0): ?>
                            <?php $hasClient = false; ?>
                            <?php foreach($clients as $c): ?>
                                <?php $dette = getLastDebt($c['dette']); ?>
                                <?php if ($dette && $dette['montant'] - $dette['montantV'] > 0): ?>
                                    <?php $hasClient = true; ?>
                                    <tr>
                                        <td><?php echo $c['nom']; ?></td>
                                        <td><?php echo $c['prenom']; ?></td>
                                        <td><?php echo $c['tel']; ?></td>
                                        <td><?php echo ($dette['montant'] - $dette['montantV']); ?> CFA</td>
                                        <td><input type="checkbox" name="action" id=""></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!$hasClient): ?>
                                <tr>
                                    <td colspan='4'>
                                        <center>Aucun Client.</center>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan='4'>
                                    <center>Aucun Client.</center>
                                </td>
                            </tr>
                        <?php endif; ?>
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
