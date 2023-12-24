<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/A_propos.yaml');

// Affichage des données
$html = "<h1>" . $data['title'] . "</h1>";

// Affichage de l'accroche
$html .= "<div class='para'>";
//$html .= "<p>" . $data['debut-accroche'] . "</p><br>";
//foreach ($data['paragraphe'] as $ligne) {
//    $html .= "<p>" . $ligne . "</p>"; 
//}
echo "<p>" . $data['paragraphe'][2]
$html .= "</div>";
echo $html
?>