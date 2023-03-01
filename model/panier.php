<?php

class Panier extends Modele  {

    private $items = array();
    private $cookieName = "panier";

    public function __construct() {
        if(isset($_COOKIE[$this->cookieName])) {
            $this->items = unserialize($_COOKIE[$this->cookieName]);
        }
    }

    public function addInstrument($idInstr, $qtite) {
        if(isset($this->items[$idInstr])) {
            $this->items[$idInstr] += $qtite;
        } else {
            $this->items[$idInstr] = $qtite;
        }
        $this->savePanier();
    }

    public function deleteInstrument($idInstr) {
        unset($this->items[$idInstr]);
        $this->savePanier();
    }

    public function clearPanier() {
        $this->items = array();
        $this->savePanier();
    }

    public function getPanier() {
        return $this->items;
    }

    private function savePanier() {
        setcookie($this->cookieName, serialize($this->items), time() + (86400 * 30), "/");
    }
}