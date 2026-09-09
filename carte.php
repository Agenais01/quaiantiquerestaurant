<?php
    // Nom de la page
    $pageName = 'card';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QuaiAntiqueRestaurant</title>
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/bootstrap/bootstrap-icons.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
        <script src="/js/script.js"></script>
        <meta property="og:image" content="/img/QuaiAntiqueRestaurant.jpg"/>
    </head>
    <body class="card-page page">
        <?php include 'templates/header.php'; ?>
        <main class="main-content">
            <div class="container">
                <h1>Notre carte</h1>
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <h2>Nos formules</h2>
                            <h3>Nos menus</h3>
                            <div class="content-block">
                                <ul>
                                    <li>Menu du jour</li>
                                    <li>Menu enfant</li>
                                    <li>Menu végétarien</li>
                                    <li>Menu dégustation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <h3>Boissons</h3>
                            <div class="content-block">
                                <ul>
                                    <li>Coca cola</li>
                                    <li>Eau pétillante</li>
                                    <li>Limonade</li>
                                    <li>Bière</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2>A la carte</h2>
                        <div class="row">
                            <div class="col-4 content-block">
                                <h3>Entrées</h3>
                                <ul>
                                    <li>Salade verte</li>
                                    <li>Pâté en croute</li>
                                    <li>Soupe</li>
                                    <li>Salade lyonnaise</li>
                                </ul>
                            </div>
                            <div class="col-4 content-block">
                                <h3>Plats</h3>
                                <ul>
                                    <li>Steack frites</li>
                                    <li>Sauté de veau</li>
                                    <li>Pizza</li>
                                    <li>Saucisson brioché</li>
                                </ul>
                            </div>
                            <div class="col-4 content-block">
                                <h3>Desserts</h3>
                                <ul>
                                    <li>Yaourt grec</li>
                                    <li>Muffin chocolat</li>
                                    <li>Panacotta</li>
                                    <li>Café gourmand</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 content-block">
                                <h2>Fromages</h2>
                                <ul>
                                    <li>Bleu de Bresse</li>
                                    <li>Camembert</li>
                                    <li>Faisselle</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </main>

        <?php include 'templates/footer.php'; ?>
    </body>
</html>