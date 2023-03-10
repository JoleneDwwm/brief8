<?php

require_once 'controller/controleurAccueil.php';
require_once 'controller/controleurInstruments.php';
require_once 'controller/controleurPanier.php';
require_once 'controller/controleurAdmin.php';
require_once 'view/vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlInstr;
  private $ctrlPanier;
  private $ctrlAdmin;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlInstr = new ControleurInstruments();
    $this->ctrlPanier = new ControleurPanier();
    $this->ctrlAdmin = new ControleurAdmin();
  }

  public function routerRequete() {
    try {

      if (isset($_GET['action'])) {

        switch ($_GET['action']) {
          
          case 'accueil': 
            $this->ctrlAccueil->accueil();
          break;

          case 'admin': 
            $this->ctrlAdmin->adminPanel();
          break;

          case 'instrument':
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
          break;

          case 'getPanier': 
            $this->ctrlPanier->getPanier(); 
          break;

          case "panier":
            if (isset($_GET['id'])) {
              $idInstrument = intval($_GET['id']);
              if ($idInstrument != 0) {
                $qtite = 1;
                //$qtite = readline('Enter la quantité souhaitée : '); // méthode pour le terminal
                $this->ctrlPanier->addInstrumentPanier($idInstrument, $qtite); 
              }
              else
                throw new Exception("Identifiant instrument non valide!");
            }
            elseif (isset($_GET['idplus'])){
              $idInstrument = intval($_GET['idplus']);
              if($idInstrument!=0){
                $qtite = 1;
                //$qtite = readline('Enter la quantité souhaitée : '); // méthode pour le terminal
                $this->ctrlPanier->addInstrumentPanier($idInstrument, $qtite); 
              }
              else
                throw new Exception("Identifiant instrument non valide!");
            }
            elseif (isset($_GET['idmoins'])){
              $idInstrument = intval($_GET['idmoins']);
              if($idInstrument!=0){
                $nb = 1;
                $this->ctrlPanier->reduceQuantity($idInstrument, $nb); 
              }
              else
                throw new Exception("Identifiant instrument non valide!");
            }
            else
              {
                $this->ctrlPanier->getPanier();                
              }  
            break;

          default:
            throw new Exception("Action invalide!");
        }
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