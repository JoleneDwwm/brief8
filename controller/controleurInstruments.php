<?php

require_once 'model/instruments.php';
require_once 'view/Vue.php';

class ControleurInstruments {

  private $instrument;

  public function __construct() {
    $this->instrument = new instruments();
  }

  public function instrument($idInstrument) {
    $instrument = $this->instrument->getInstrument($idInstrument);
    $vue = new Vue("Instrument");
    $vue->generer(array('instrument' => $instrument));
  }
}