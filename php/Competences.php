<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Competences.yaml');

// HTML généré avec les données YAML

$star = "./../image/star.png";
$star_vide = "./../image/star_vide.png";
$html1 = "<h1>" . 'Compétence'. "</h1>";
$html1 .= "<div class='content'>";
foreach ($data as $item) {
    $html1 .= "<div class='position para'> <p class='text'>" . $item['nom']. "</p><div>";
    for($i=1; $i<=5; $i++){
        if($i<=$item["niveau"]){
            $html1 .= "<img src='" . $star . "' class='etoile'  alt='Star'>";
        }
        else{
            $html1 .= "<img src='" . $star_vide . "' class='etoile' alt='Star'>";
        }
    }
    $html1 .= "</div></div>";
}
$html1 .="<p class='para'>Score pix : 559</p>";
$html1 .= "</div>";
echo $html1;
?>