<!DOCTYPE html>
<html lang="fr">
<?php
require './../yaml1/vendor/autoload.php'; // Assurez-vous d'ajuster le chemin si nécessaire
use Symfony\Component\Yaml\Yaml;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/noeud.css">
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
        <div id="Accueil">
        <?php
            // Chargement du fichier YAML
            $data = Yaml::parseFile('./../YAML/Accueil.yaml');

            // Accès aux données
            $experience = $data['Accueil'];

            // Affichage des données
            echo '<h1>' . $data['Accueil']['title'] . '</h1>';
            echo '<img src="' . $data['Accueil']['image'] . '" alt="' . $data['Accueil']['alt'] . '" class="' . $data['Accueil']['class'] . '">';
            echo '<p>' . $data['Accueil']['name'] . '</p>';
            ?>
        <div id="Exeperience">
            <?php
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
                echo "<Description:>" . $item['description'] . "<br>";
                echo "<Date:>" . $item['date'] . "<br>";
                echo "</li>";
            }
            echo "</ul>";
            echo "<a href='$cvLink'>CV</a>";
            ?>
            </div>
            <div id="Formation">
            <?php
            // Chargement du fichier YAML
            $data = Yaml::parseFile('./../YAML/Formation.yaml');

            // Accès aux données
            $experience = $data['Formation'];
            $cvLink = $data['CV'];

            // Affichage des données
            echo "<h1>Formation</h1>";
            echo "<ul>";
            foreach ($experience as $item) {
                echo "<li>";
                echo "<strong>" . $item['title'] . "</strong><br>";
                echo "</li>";
            }
            echo "</ul>";
            echo "<a href='$cvLink'>CV</a>";
            ?>
        </div>
    </main>
</body>
</html>