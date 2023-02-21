<?php
$bdd = new PDO('mysql:host=localhost;dbname=musicstore;charset=utf8', 'root', '' );
$instruments = $bdd->query('SELECT ID as ID, Nom as Nom, Cat as Cat, Descr as Descr, Img as Img, Prix as Prix FROM instruments');
?>

<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Mon Blog</title>
</head>
<body>
     <?php foreach ($instruments as $instrument): ?>
        <div>
            <header>
                <h2><?= $instrument['Nom'] ?></h1>
                <p><?= $instrument['Cat'] ?></p>
            </header>
            <p><?= $instrument['Descr'] ?></p>
            <p><?= $instrument['Img'] ?></p>
            <p><?= $instrument['Prix'] ?></p>
        </div>
        <?php endforeach; ?>
        </body>