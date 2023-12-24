<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Experience.yaml');
// Accès aux données
$experience = $data['Experience'];
$cvLink = $data['CV'];
// Affichage des données
$html .= "<h1>Expérience</h1>";
$html .= "<div class='para'><ul>";
foreach ($experience as $item) {
  $html .= "<li>";
  $html .= "<strong>" . $item['title'] . "</strong><br>";
  $html .= "<Description:>" . $item['description'] . "<br>";
  $html .= "<Date:>" . $item['date'] . "<br>";
  $html .= "</li>";
}
$html .= "</ul>";
$html .= "<a href='$cvLink'>Lien vers mon CV</a></div>";
?>
