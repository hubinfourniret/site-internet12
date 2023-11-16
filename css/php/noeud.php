<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/css.css">
</head>
<body class="body">
    <header class="main-header">
		<nav class="menu-nav">
            <ul class="menu-ul">
                <li><a href="#Accueil">Accueil</a></li>
                <li><a href="#A_propos">A propos</a></li>
                <li><a href="#Competences">Compétences</a></li>
                <li><a href="#Experience">Expérience</a></li>
                <li><a href="#Formation">Formation</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </nav>
	</header>
    <main>
        <div>
            <a id="Accueil"></a>
            <h1>Accueil</h1>
            <img src="./../image/photo.png" alt="photo de moi" class="photo">
            <p>Hubin FOURNIRET</p>
        </div>
        <div>
            <?php
            require 'vendor/autoload.php'; // Assurez-vous d'ajuster le chemin si nécessaire
            use Symfony\Component\Yaml\Yaml;

            // Chargement du fichier YAML
            $data = Yaml::parseFile('Experience.yaml');

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