<!DOCTYPE html>
<html lang="fr">
<?php
require "./../yaml1/vendor/autoload.php"; // Assurez-vous d'ajuster le chemin si nécessaire
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
            require("Accueil.php");
            ?>
        <div id="Experience">
            <?php
            require("Experience.php");
            ?>
        </div>
        <div id="Formation">
            <?php
            require("Formation.php")
            ?>
        </div>
    </main>
</body>
</html>