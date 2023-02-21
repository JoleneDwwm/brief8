<?php $titre = 'Ukulele Store'; ?>

<?php ob_start(); ?>
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
<?php $contents = ob_get_clean(); ?>

<?php require 'template.php'; ?>