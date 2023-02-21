<?php $titre = 'Ukulele Store'; ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contents = ob_get_clean(); ?>

<?php require 'template.php'; ?>