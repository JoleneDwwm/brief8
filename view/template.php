<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/style.css" />
    <title><?= $titre ?></title>
</head>
<header>
    <h1>the Ukulele Store</h1>
    <div><a href="index.php?action=accueil">Page d'Accueil</a> <a href="index.php?action=getPanier">Panier</a></div>
</header>
<body>
    <div>
        <div>
        <?= $contenu ?>
        </div>
    </div>
</body>
<footer>
    <p>Les articles présentés sont issus du site <a href="https://www.magicfluke.com/">the Magic Fluke Company</a>.</p>
</footer>