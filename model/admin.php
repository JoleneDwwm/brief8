<?php

require_once 'model/modele.php';

class admin extends modele {

    // Read
    public function getAllArticles(){
        $sql = 'SELECT * FROM instruments';
        $instruments = $this->executerRequete($sql);
        return $instruments;
    }

    // Create
    public function addInstrument(){
        if(isset($_POST['newInstrName']) && isset($_POST['newInstrCat']) && isset($_POST['newInstrDescription']) && isset($_POST['newInstrPrix'])){ 
            $newInstrName = $_POST['newInstrName'];
            $newInstrCat = $_POST['newInstrAddress'];
            $newInstrDescription = $_POST['newInstrDescription'];
            $newInstrPrix = $_POST['newInstrPrix']; 
            $sql = "INSERT INTO `instruments` (`nom`, `cat`, `descr`, `prix`) VALUES ('$newInstrName', '$newInstrAddress', '$newInstrDescription', '$newInstrPrix')";
            $this->executerRequete($sql);
        }
    }

    //Update 
    public function modifierInstrument(){
        if(isset($_POST['update1']) && isset($_POST['update2']) && isset($_POST['update3']) && isset($_POST['update4']) && isset($_POST['update6'])){
            $idNumber = $_POST['update1'];
            $update2 = $_POST['update2'];
            $update2 = $_POST['update3'];
            $update2 = $_POST['update4'];
            $update2 = $_POST['update6'];
            $sql = "UPDATE liens SET nom = '$modified1', url = '$modified2', description = '$modified3' WHERE numero = '$idNumber'";
            $this->executerRequete($sql);
        }
    }

    //Delete 
    public function supprimerInstrument(){
        if(isset($_POST['numberDelete'])){
            $numberDelete = $_POST['numberDelete'];
            $sql = "DELETE FROM `instruments` WHERE `instruments`.`ID` = '$numberDelete'";
            $this->executerRequete($sql);
        }
    }
}