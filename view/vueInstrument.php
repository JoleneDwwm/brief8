<?php $this->titre = $instrument['Cat'] . "Store"; ?>

<div class= "card">
    <header>
        <h2><?= $instrument['Nom'] ?></h1>
        <p><?= $instrument['Cat'] ?></p>
    </header>
    <p><?= $instrument['Descr'] ?></p>
    <p><?= $instrument['Img'] ?></p>
    <p><?= $instrument['Prix'] ?></p>
    <br/>
    <button type="button"><a href="<?= "index.php?action=panier&id=". $instrument['ID'] ?>">Ajouter au panier</a></button>    
</div>
