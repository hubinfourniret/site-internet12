<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/A_propos.yaml');

// Accès aux données
$experience = $data['A_propos'];

$title = $data['title'];
$accroche = $data['accroche'];

// Affichage des données
echo "<h1>" . $title . "</h1>";

// Affichage de l'accroche
echo "<div class='para'>";
echo "<p>" . $data['bien'] . "</p><br>";
foreach ($accroche as $paragraphe) {
    echo "<BLOCKQUOTE>" . $paragraphe . "</BLOCKQUOTE>";
}
echo "</div>";
?>

