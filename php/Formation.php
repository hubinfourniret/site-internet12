<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;


// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Formation.yaml');

// Accès aux données
$experience = $data['Formation'];
$cvLink = $data['CV'];

// Affichage des données
$html .= "<h1>Formation</h1>";
$html .= "<div class='para'><ul>";
foreach ($experience as $item) {
  $html .= "<li>";
  $html .= $item['title']."<br>";
  $html .= "</li>";
}
$html .= "</ul>";
$html .= "<a href='$cvLink'>Lien vers mon CV</a></div>";
?>
