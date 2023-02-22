<?php

require_once 'model/instruments.php';
require_once 'view/Vue.php';

class ControleurAccueil {

  private $instruments;

  public function __construct() {
    $this->instruments = new instruments();
  }

  // Affiche la liste de tous les billets du blog
  public function accueil() {
    $instruments = $this->instruments->getArticles();
    $vue = new Vue("Accueil");
    $vue->generer(array('instruments' => $instruments));
  }
}