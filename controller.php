<?php
require 'Modele.php';

function erreur($msgErreur) {
    require 'vueErreur.php';
}

function accueil() {
    $instruments = getArticles(); 
require 'vueAccueil.php';
}

function instrument($idInstrument) {
    $instr = getInstrument($idInstrument);
    require 'vueInstrument.php';
}