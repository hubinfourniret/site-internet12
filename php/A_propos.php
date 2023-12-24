<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/A_propos.yaml');

// Affichage des données
echo "<h1>" . $data['title'] . "</h1>";

// Affichage de l'accroche
echo "<div class='para'>";
echo "<br>" . $data['debut-accroche'] . "</br>";
foreach ($accroche as $data['paragraphe']) {
    echo "<p>" . $data['paragraphe'] . "</p>";
}
echo "</div>";
?>

