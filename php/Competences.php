<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Competences.yaml');

// HTML généré avec les données YAML

$star .= "./../image/star.png";
$star_vide = "./../image/star_vide.png";
echo "<h1>" . 'Compétence'. "</h1>";
echo "<div class='content'>";
foreach ($data as $item) {
    echo "<div class='position para'> <p class='text'>" . $item['nom']. "</p><div>";
    for($i=1; $i<=5; $i++){
        if($i<=$item["niveau"]){
            echo "<img src='" . $star . "' class='etoile'  alt='Star'>";
        }
        else{
            echo "<img src='" . $star_vide . "' class='etoile' alt='Star'>";
        }
    }
    echo "</div></div>";
}
echo "<p class='para'>Score pix : 559</p>";
echo "</div>";
?>