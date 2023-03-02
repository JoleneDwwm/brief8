<?php $this->titre = 'Ukulele Store'; ?>

<?php if (!empty($panier)): 
    foreach ($data as $instrument) :?>
<div class= "card">
        <header>
            <h2><?= $instrument['Nom'] ?></h1>
            <p><?= $instrument['Cat'] ?></p>
        </header>
            <p><?= $instrument['Descr'] ?></p>
            <p><?= $instrument['Img'] ?></p>
            <p><?= $instrument['Prix'] ?></p>

            <button type="button"><a href="<?= "index.php?action=panier&idplus=".$instrument['ID'] ?>">Ajouter</a></button> <button type="button"><a href="<?= "index.php?action=panier&idmoins=".$instrument['ID'] ?>">Supprimer</a></button>
</div>
    <?php endforeach ; ?>
    <?php else : ?> 
    <div class="card"> 
        <p>Panier vide!</p>
    </div>
    <?php endif ; ?>