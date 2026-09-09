<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Validation Email</title>
</head>
<body>

<?php
// Exemple : récupération d'une chaîne envoyée par formulaire POST (ou liste de test)
$raw_input = $_POST['email'] ?? 'test@example.com, adresse-invalide';

// Transformation de la chaîne en tableau si plusieurs e-mails séparés par des virgules
$emails = explode(',', $raw_input);

echo "<ul>";
foreach ($emails as $email) {
    $email_clean = trim($email);

    if (filter_var($email_clean, FILTER_VALIDATE_EMAIL)) {
        echo "<li><strong>" . htmlspecialchars($email_clean) . "</strong> : Valide</li>";
    } else {
        echo "<li><strong>" . htmlspecialchars($email_clean) . "</strong> : L'adresse e-mail saisie n'est pas valide</li>";
    }
}
echo "</ul>";
?>

</body>
</html>