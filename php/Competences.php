<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Competences.yaml');

// HTML généré avec les données YAML

$star = "./../image/star.png";
$star_vide = "./../image/star_vide.png";
$html .= "<h1>" . 'Compétence'. "</h1>";
$html .= "<div class='content'>";
foreach ($data as $item) {
    $html .= "<div class='position para'> <p class='text'>" . $item['nom']. "</p><div>";
    for($i=1; $i<=5; $i++){
        if($i<=$item["niveau"]){
            $html .= "<img src='" . $star . "' class='etoile'  alt='Star'>";
        }
        else{
            $html .= "<img src='" . $star_vide . "' class='etoile' alt='Star'>";
        }
    }
    $html .= "</div></div>";
}
$html .="<p class='para'>Score pix                  559</p>";
$html .= "</div>";
echo $html;
?>
