<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Accueil.yaml');

// Accès aux données
$experience = $data['Accueil'];

// Affichage des données
echo '<h1>' . $data['Accueil']['title'] . '</h1>';
echo '<img src="' . $data['Accueil']['image'] . '" alt="' . $data['Accueil']['alt'] . '" class="' . $data['Accueil']['class'] . '">';
echo '<p>' . $data['Accueil']['name'] . '</p>';
?>