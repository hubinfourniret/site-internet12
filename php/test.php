<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/css.css">
</head>
<body class="body">

<main>
        <div>
            <?php
            require './../YAML/vendor/autoload.php'; // Assurez-vous d'ajuster le chemin si nécessaire
            use Symfony\Component\Yaml\Yaml;

            // Chargement du fichier YAML
            $data = Yaml::parseFile('./../YAML/Experience.yaml');

            // Accès aux données
            $experience = $data['Experience'];
            $cvLink = $data['CV'];

            // Affichage des données
            echo "<h1>Expérience</h1>";
            echo "<ul>";
            foreach ($experience as $item) {
                echo "<li>";
                echo "<strong>" . $item['title'] . "</strong><br>";
                echo "Description: " . $item['description'] . "<br>";
                echo "Date: " . $item['date'] . "<br>";
                echo "</li>";
            }
            echo "</ul>";
            echo "<a href='$cvLink'>CV</a>";
            ?>
        </div>
    </main>
</body>
</html>