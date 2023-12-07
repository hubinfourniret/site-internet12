<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('./../YAML/Competences.yaml');

// HTML généré avec les données YAML


//$html = '<div>' . PHP_EOL;
//foreach ($data['starts'] as $item) {
//    $html .= '  <p class="text">' . $item['title'];

//    foreach ($item['stars'] as $star) {
//        $html .= '    <img src="' . $star . '" class="etoile" alt="Star">' . PHP_EOL;
//    }
//  $html .= '  </p>' . PHP_EOL;
//}
//$html .= '</div>' . PHP_EOL;

//echo $html;
//

$html = '<div class="content">' . PHP_EOL;
foreach ($data['content'] as $item) {
    $html .= '  <p class="text">' . $item['title'];

    foreach ($item['stars'] as $star) {
        $html .= '    <img src="' . $star . '" class="etoile" alt="Star">' . PHP_EOL;
    }

    $html .= '  </p>' . PHP_EOL;
}

$html .= '</div>' . PHP_EOL;

echo $html;
?>