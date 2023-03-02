<?php

require_once 'model/modele.php';

class instruments extends modele {
public function getArticles(){
$sql = 'SELECT ID as ID, Nom as Nom, Cat as Cat, Descr as Descr, Img as Img, Prix as Prix FROM instruments';
$instruments = $this->executerRequete($sql);
return $instruments;
}
public function getInstrument($idInstrument){
$sql = 'SELECT ID as ID, Nom as Nom, Cat as Cat, Descr as Descr, Img as Img, Prix as Prix FROM instruments WHERE ID=?';
$instrument = $this->executerRequete($sql, array($idInstrument));
    if ($instrument->rowCount() == 1)
        return $instrument->fetch(); 
    else
        throw new Exception("Aucun instrument ne correspond au numéro '$idInstrument'");
}
}