<?php $this->titre = 'Session Administrateur' ?>

<!--Ajouter un instrument (Create)-->
<div class="card">
    <form method="post">
        <p>Ajouter un instrument dans la base de données</p></br>
        Nom: <input type="text" name="newInstrName"></br>
        Catégorie: <input type="text" name="newInstrAddress"></br>
        Description: <input type="text" name="newInstrDescription"></br>
        Prix: <input type="text" name="newInstrPrix"></br>
        <input type="submit" class="button" value="Ajouter">
    </form>
</div>

<!--Voir tous les instruments (Read)-->
<?php foreach ($instruments as $instrument): ?>
<div class="card">
    <h2><?= $instrument['Nom'] ?></h1>
    <p><?= $instrument['Cat'] ?></p>
    <p><?= $instrument['Descr'] ?></p>
    <p><?= $instrument['Img'] ?></p>
    <p><?= $instrument['Prix'] ?></p>
</div>
<?php endforeach; ?>