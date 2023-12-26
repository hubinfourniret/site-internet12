<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Experience.yaml');
// Accès aux données
$experience = $data['Experience'];
$cvLink = $data['CV'];
// Affichage des données
echo "<h1>Expérience</h1>";
echo "<div class='para'><ul>";
foreach ($experience as $item) {
  echo "<li>";
  echo "<strong>" . $item['title'] . "</strong><br>";
  echo "<Description:>" . $item['description'] . "<br>";
  echo "<Date:>" . $item['date'] . "<br>";
  echo "</li>";
}
echo "</ul>";
echo "<a href='$cvLink'>Lien vers mon CV</a></div>";
?>
