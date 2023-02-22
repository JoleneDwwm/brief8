<?php
require 'controller/controller.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'instrument') {
            if (isset($_GET['id'])) {
                $idInstrument = intval($_GET['id']);
                    if ($idInstrument != 0) {
                        instrument($idInstrument);
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
    else 
        accueil(); 
    }
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'view/vueErreur.php';
}