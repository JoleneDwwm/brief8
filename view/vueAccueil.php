<?php $this->titre = 'Ukulele Store'; ?>

<?php foreach ($instruments as $instrument): ?>
    <div class="card">
        <header>
            <a href="<?= "index.php?action=instrument&id=" . $instrument['ID'] ?>">
            <h2><?= $instrument['Nom'] ?></h2></a>
        </header>
            <p><?= $instrument['Prix'] ?> dollars</p>
    </div>
<?php endforeach; ?>
