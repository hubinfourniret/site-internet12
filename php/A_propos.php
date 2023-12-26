<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/A_propos.yaml');

// Affichage des données
echo "<h1>" . $data['title'] . "</h1>";

// Affichage de l'accroche
//$html .= "<p>" . $data['debut-accroche'] . "</p><br>";
//foreach ($data['paragraphe'] as $ligne) {
//    $html .= "<p>" . $ligne . "</p>"; 
//}
echo "<div class='para'>";
echo "<p>" . $data['paragraphe'][0] . "</p><br>";
echo "<p class='alinéa'>" . $data['paragraphe'][1] . "</p><br>";
echo "<p class='alinéa'>" . $data['paragraphe'][2] . "</p>";
echo "<p>" . $data['paragraphe'][3] . "</p>";
echo "<p>" . $data['paragraphe'][4] . "</p>";
echo "<p>" . $data['paragraphe'][5] . "</p><br>";
echo "<p class='alinéa'>" . $data['paragraphe'][6] . "</p>";
echo "<p>" . $data['paragraphe'][7] . "</p><br>";
echo "<p class='alinéa'>" . $data['paragraphe'][8] . "</p>";
echo "</div>";
?>