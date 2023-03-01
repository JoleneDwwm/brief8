<?php $this->titre = 'Ukulele Store'; ?>

<?php foreach ($instruments as $instrument): ?>
    <div class="card">
        <header>
            <a href="<?= "index.php?action=instrument&id=" . $instrument['ID'] ?>">
            <h2><?= $instrument['Nom'] ?></h2></a>
        </header>
            <p><?= $instrument['Prix'] ?> dollars</p>
            <button type="button"><a href="<?= "index.php?action=panier&id=". $instrument['ID'] ?>">Ajouter au panier</a></button>
    </div>
<?php endforeach; ?>
