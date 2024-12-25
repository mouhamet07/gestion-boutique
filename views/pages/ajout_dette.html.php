<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Dettes</title>
    <link rel="shortcut icon" href="./img/logo-boutique.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/addDette.css">
    <link rel="stylesheet" href="../public/css/addDette.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="asside">
            <?php
                include "../views/partial/header.html.php"
            ?>
            <div class="page">
                <h1>Ajout D'une Dette</h1>
                <div class="addDette">
                    <div class="side left">
                        <h3>Enregistrer Clients</h3>
                        <a href="http://www.mouhamet-thiam.ism.edu.sn/index.php?page=4" class="newClient">+ Créer un nouveau client</a>
                        <div class="saveClient">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" placeholder="Entrez le nom" />
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Entrez le prenom"/>
                            <label for="numero">Numero</label>
                            <input type="number" name="numero" id="numero" placeholder="Entrez le numero">
                            <p class="total"><strong>Total du:</strong> 120.000 CFA</p>
                            <h4>Dettes Récentes</h4>
                            <table class="tabDette">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>03/11/2024</td>
                                        <td>50.000 CFA</td>
                                    </tr>
                                    <tr>
                                        <td>01/11/2024</td>
                                        <td>30.000 CFA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="side right">
                        <h3>Enregistrer Dettes</h3>
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date">
                        <label for="montant">Montant</label>
                        <input type="number" id="montant" name="montant" placeholder="Entrez le montant">
                        <h4>Designation</h4>
                        <div class="designation">
                            <div class="top">
                                <div>
                                    <label for="produit">Produit</label>
                                    <select name="produit" id="produit">
                                        <option value="">Choisir</option>
                                        <option value="produit1">Produit 1</option>
                                        <option value="produit2">Produit 2</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantite">Quantité</label>
                                    <input type="number" name="quantite" id="quantite" placeholder="Entrez la quantité">
                                </div>
                                <div>
                                    <label for="prix">Prix unitaire</label>
                                    <input type="number" name="prix" id="prix" placeholder="Prix unitaire du produit">
                                </div>
                            </div>
                            <div class="bottom">
                                <button class="moins">-</button>
                                <button class="plus">+</button>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="annuler" onclick="window.location.href='http://www.mouhamet-thiam.ism.edu.sn/index.php?page=2'">Annuler</button>
                            <button class="enregistrer" onclick="window.location.href='http://www.mouhamet-thiam.ism.edu.sn/index.php?page=2'">Enregistrer</button>
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
