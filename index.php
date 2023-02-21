<?php
try{
require 'Modele.php';
$instruments = getArticles(); 
require 'vueAccueil.php';
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}