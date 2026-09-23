<?php

/**
* Définition du gestionnaire d'erreurs global
*/
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
	echo "Nous sommes désolés, un problème vient de survenir :/ \nNous vous invitons à revenir plus tard." . PHP_EOL;
//Si c'est une erreur de niveau 2 (avertissement), l’exécution peut en principe continuer
// mais on décide, par précaution, d'arrêter là les frais
	if ($errno === E_WARNING)
		die;
});

require 'nom du fichier.php';
echo 'Tout va bien' . PHP_EOL;
?>