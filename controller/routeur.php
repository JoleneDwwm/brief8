<?php

require_once 'controller/controleurAccueil.php';
require_once 'controller/controleurInstruments.php';
require_once 'view/vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlInstr;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlInstr = new ControleurInstruments();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'instrument') {
                if (isset($_GET['id'])) {
                    $idInstrument = intval($_GET['id']);
                        if ($idInstrument != 0) {
                            $this->ctrlInstr->instrument($idInstrument);
                        }
                        else
                            throw new Exception("Identifiant d'instrument incorrect");
                    }
                    else
                        throw new Exception("Aucun identifiant d'instrument");
            }
            else
                throw new Exception("Action invalide!");
      }
      else { 
        $this->ctrlAccueil->accueil();
      }
    }
    catch (Exception $e) {
      $this->erreur($e->getMessage());
    }
  }

  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
}