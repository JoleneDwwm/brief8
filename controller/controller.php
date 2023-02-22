<?php
require 'model/Modele.php';

function erreur($msgErreur) {
    require 'view/vueErreur.php';
}

function accueil() {
    $instruments = getArticles(); 
require 'view/vueAccueil.php';
}

function instrument($idInstrument) {
    $instr = getInstrument($idInstrument);
    require 'view/vueInstrument.php';
}