<?php

require_once 'model/panier.php';
require_once 'model/instruments.php';
require_once 'view/vue.php';

class ControleurPanier {

  private $panier;
  private $instrumentAdded;

  public function __construct() {
    $this->panier = new Panier();
  }

  // Affiche les instruments du panier
  public function getPanier() {
    $panier = $this->panier->getPanier();
    $data = [];
    // Récupération des caractéristiques de l'instrument Class Instrument (Modele)
    if (!empty($panier)){ 
        foreach ($panier as $key => $value) {
            echo "{$key} => {$value} "; //$key est l'identifiant de l'instrument et $value est la quantité
            $this->instrumentAdded = new instruments();
            $tmp = $this->instrumentAdded->getInstrument($key);  //$key est l'identifiant de l'instrument
            array_push($data, $tmp);
        }
    }
    $vue = new Vue("Panier");
    $vue->generer(array('panier' => $panier, 'data' => $data));
  }

  // Ajout d'un instrument au panier
  public function addInstrumentPanier($idInstr, $qtite){
    $panier = $this->panier->addInstrument($idInstr, $qtite);
    $panier = $this->getPanier();
  }

  // Retirer un instrument du panier
  public function deleteInstrumentPanier($idInstr){
    $panier = $this->panier->deleteInstrument($idInstr);
    $panier = $this->getPanier();
  }

  // Diminuer la quantité d'instrument commandée
  public function reduceQuantity($id, $nb){
    $panier = $this->panier->reduceQtity($id, $nb);
    $panier = $this->getPanier();
  }
  //Vider le panier
  public function clearPanier(){
    $panier = $this->panier->clearPanier();
    $panier = $this->getPanier();
  }
}
