<?php $titre = 'Ukulele Store'; ?>

<?php ob_start(); ?>
<?php foreach ($instruments as $instrument): ?>
    <div>
        <header>
            <a href="<?= "instrument.php?id=" . $instrument['ID'] ?>">
            <h2><?= $instrument['Nom'] ?></h2></a>
        </header>
            <p><?= $instrument['Prix'] ?> dollars</p>
    </div>
<?php endforeach; ?>
<?php $contents = ob_get_clean(); ?>

<?php require 'template.php'; ?>