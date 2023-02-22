<?php $titre = $instr['Cat'] . "Store"; ?>

<?php ob_start(); ?>
<div class= "card">
        <header>
            <h2><?= $instr['Nom'] ?></h1>
            <p><?= $instr['Cat'] ?></p>
        </header>
            <p><?= $instr['Descr'] ?></p>
            <p><?= $instr['Img'] ?></p>
            <p><?= $instr['Prix'] ?></p>
    </div>
<?php $contents = ob_get_clean(); ?>

<?php require 'template.php'; ?>