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

<!--Supprimer un instrument (Delete)-->
<div class="card">
    <form method="post">
        <p>Supprimer une entrée dans la base de données</p></br>
        Sélectionner le numéro de l'entrée: <input type="int" name="numberDelete"></br>
        <input type="submit" class="button" value="Supprimer">
    </form>
</div>

<!--Voir tous les instruments (Read) et les modifier (Update) -->
<?php foreach ($instruments as $instrument): ?>
<div class="card">
        <tr>
            <td><p><?= $instrument['ID'] ?></p></td>
            <td><h2><?= $instrument['Nom'] ?></h1></td>
            <td><p><?= $instrument['Cat'] ?></p></td>
            <td><p><?= $instrument['Descr'] ?></p></td>
            <td><p><?= $instrument['Img'] ?></p></td>
            <td><p><?= $instrument['Prix'] ?></p></td>
        </tr>
    <form method="post">
        <tr>
            <td><input type="hidden" value ="<?= $instrument['ID'] ?>" name="update1"></td>
            <td><input type="text" value ="modifier le nom" name="update2"></td>
            <td><input type="text" value ="modifier la catégorie" name="update3"></td>
            <td><input type="text" value ="modifier la description" name="update4"></td>
            <td></td>
            <td><input type="text" value ="modifier le prix" name="update6"></td>
        </tr>
    <input type="submit" class="button" value="Modifier">
    </form>
</div>
<?php endforeach; ?>