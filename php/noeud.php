<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/noeud.css">
</head>
<body class="body">
    <header class="main-header">
		<nav class="menu-nav" role="navigation">
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
        <section id="Accueil">
            <?php
            require("Accueil.php");
            ?>
        </section>
        <section id="Competences">
            <?php
            require("competences.php")
            ?>
        </section>
        <section id="Experience">
            <?php
            require("Experience.php");
            ?>
        </section>
        <section id="Formation">
            <?php
            require("Formation.php")
            ?>
        </section>
    </main>
</body>
</html>