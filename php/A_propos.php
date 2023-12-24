<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/A_propos.yaml');

// Affichage des données
$html = "<h1>" . $data['title'] . "</h1>";

// Affichage de l'accroche
//$html .= "<p>" . $data['debut-accroche'] . "</p><br>";
//foreach ($data['paragraphe'] as $ligne) {
//    $html .= "<p>" . $ligne . "</p>"; 
//}
$html .= "<div class='para'><p>" . $data['paragraphe'][1] . "</p><br>";
$html .= "<p>" . $data['paragraphe'][2] . "</p>";
$html .= "<p>" . $data['paragraphe'][3] . "</p>";
$html .= "<p>" . $data['paragraphe'][4] . "</p>";
$html .= "<p>" . $data['paragraphe'][5] . "</p><br>";
$html .= "<p>" . $data['paragraphe'][6] . "</p>";
$html .= "<p>" . $data['paragraphe'][7] . "</p><br>";
$html .= "<p>" . $data['paragraphe'][8] . "</p>";
$html .= "</div>";
echo $html
?>









