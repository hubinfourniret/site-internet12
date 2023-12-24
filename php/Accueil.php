<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Accueil.yaml');

// Accès aux données
$experience = $data['Accueil'];

// Affichage des données*
$html = "<h1>" . $data['Accueil']['title'] . "</h1>";
$html .= "<div class='para'><img src='" . $data['Accueil']['image'] . "' class='" . $data['Accueil']['class'] ."'>";
$html .= "<p>" . $data['Accueil']['name'] . "</p>";
$html .= "<p>" . $data['Accueil']['présentation'] ."</p></div>";
?>
