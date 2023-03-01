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
</div>
    <?php endforeach ; ?>
    <?php else : echo "Panier vide" ; ?>
    <?php endif ?>