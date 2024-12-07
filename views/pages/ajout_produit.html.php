<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Produit</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/addProduit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Ajout Produit</h1>
                <form action="" method="" class="produit">
                    <div class="libelle">
                        <label for="productLabel">Libelle:</label>
                        <input type="text" id="libelle" name="libelle" required>
                    </div>
                    <div class="bottom">
                        <div class="prix">
                            <label for="prix">Prix Unitaire:</label>
                            <input type="number" id="prix" name="prix"  required>
                        </div>
                        <div class="stock">
                            <label for="Stock">Quantité en Stock:</label>
                            <input type="number" id="stock" name="Stock" required>
                        </div>
                    </div>
                    <div class="addProduct">
                        <button type="submit" class="bCancel" onclick="window.location.href='http://localhost/gestion-boutique/publics/?page=2'">Annuler</button>
                        <button type="submit" class="bAdd" onclick="window.location.href='http://localhost/gestion-boutique/publics/?page=2'">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        include "../views/partial/menu.html.php";
    ?>
</body>
</html>
