<?php
    $pageName = 'home';

    try {
        $pdo = new Pdo("mysql:host=localhost;port=3306;dbname=quaiantiquerestaurant", 'root', null);
    } catch (PDOException $e) {
        //echo "Erreur de connexion.";
        echo "Erreur de connexion : " . $e->getMessage();
        die;
    }
    $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

    //echo '<pre>' . print_r($pdo, true) . '</pre>';
    //die;

    //$pdo->exec("INSERT INTO drinks_types (name) VALUES ('Coca-Cola Cherry');");
    //$pdo->exec("TRUNCATE TABLE drinks_types;");
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
    <body class="index-page page">
        <?php include 'templates/header.php'; ?>
        <main class="main-content">
            <div class="intro">
                <h1>Bienvenue au Quai Antique Restaurant</h1>
                <p>
                    Découvrez une expérience culinaire unique au bord de l'eau, où la tradition rencontre l'innovation 
                    dans un cadre chaleureux et accueillant.
                </p>
            </div>
        </main>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>