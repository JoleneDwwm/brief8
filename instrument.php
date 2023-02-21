<?php

require 'modele.php';

try {
  if (isset($_GET['id'])) {
    $idInstrument = intval($_GET['id']);
    if ($idInstrument != 0) {
      $instr = getInstrument($idInstrument);
      require 'vueInstrument.php';
    }
    else
      throw new Exception("Identifiant d'instrument incorrect");
  }
  else
    throw new Exception("Aucun identifiant d'instrument");
}
catch (Exception $e) {
  $msgErreur = $e->getMessage();
  require 'vueErreur.php';
}