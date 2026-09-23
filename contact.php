<?php
    // Initialisation de quelques variables utiles à la page et aux traitements effectués dessus
    $pageName = 'contact';
    $errors   = [];

    // 1. Récupérer les champs soumis du formulaire
    $formData = $_POST;
    unset($_POST);

    // Définir les champs obligatoires du formulaire
    $requiredFields = [
        'contact-lastname', 
        'contact-firstname', 
        'contact-email', 
        'contact-message', 
        'contact-rgpd'
    ];

    echo '<pre>';
    print_r($formData);
    echo '</pre>';

    // 2. Nettoyer les données reçues
    if (count($formData) === 0) {
        $errors[] = 'Aucune donnée reçue !';
    } else {
        // Je parcours le tableau des données reçues
        foreach ($formData as $formField => $fieldValue) {
            // Je ne traite pas le bouton de soumission du formulaire
            if (in_array($formField, ['contact-submit'])) {
                continue;
            }

            // Je nettoie la valeur du champ actuel en supprimant les espaces superflus au début et à 
            // la fin de la chaîne
            $tempValue = trim($fieldValue);

            // J'affiche un message d'erreur si le champ est vide et qu'il est obligatoire, sinon 
            // je stocke la valeur nettoyée dans le tableau $formData
            if (empty($tempValue) && in_array($formField, $requiredFields)) {
                $errors[] = 'Le champ "' . $formField . '" est vide !';
            } else {
                $formData[$formField] = $tempValue;
            }
        }
    }

    // 3. Valider le format des données reçues
    if (!filter_var($formData['contact-email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'adresse email n\'est pas valide !';
    }

    // 4. Si des erreurs sont détectées, les lister dans un tableau $errors pour les afficher sur la page

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QuaiAntiqueRestaurant - Contactez-nous !</title>
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/bootstrap/bootstrap-icons.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
        <script src="/js/script.js"></script>
        <meta property="og:image" content="/img/QuaiAntiqueRestaurant.jpg"/>
    </head>
    <body class="contact-page page">
        <?php include 'templates/header.php'; ?>
        <main class="contact-content">
            <div id="contact" class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="contact-block col">
                            <h1>Contact</h1>
                            <form action="/contact.php" method="post" class="contact-form">
                                <fieldset>
                                    <legend>Nous contacter</legend>
                                    <?php if (isset($errors) && count($errors) > 0): ?>
                                        <div class="alert alert-danger">
                                            <b>Des erreurs ont été détectées !</b>
                                            <ul>
                                                <?php foreach ($errors as $error): ?>
                                                <li><?php echo $error; ?></li>  
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <label for="contact-lastname" class="form-label">Votre nom :<sup class="text-danger">*</sup></label>
                                        <input required type="text" name="contact-lastname" class="form-control" id="contact-lastname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact-firstname" class="form-label">Votre prénom :<sup class="text-danger">*</sup></label>
                                        <input required type="text" name="contact-firstname" class="form-control" id="contact-firstname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact-email" class="form-label">Votre email :<sup class="text-danger">*</sup></label>
                                        <input required type="email" name="contact-email" class="form-control" id="contact-email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact-phone" class="form-label">Votre téléphone :</label>
                                        <input type="tel" name="contact-phone" class="form-control" id="contact-phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact-message" class="form-label">Votre message :<sup class="text-danger">*</sup></label>
                                        <textarea required name="contact-message" class="form-control" id="contact-message" rows="8"></textarea>
                                    </div>
                                    <div class="mb-3 form-check form-switch rgpd-block">
                                        <input class="form-check-input" type="checkbox" role="switch" id="contact-rgpd" name="contact-rgpd">
                                        <label class="form-check-label" for="contact-rgpd">J'accepte la politique de confidentialité</label>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-success" type="submit" name="contact-submit">Envoyer</button>
                                    </div>
                                    <p class="badge text-bg-danger">* : champ obligatoire</p>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>