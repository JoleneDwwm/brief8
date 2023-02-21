<?php

function getArticles(){
    $bdd = getBDD();
    $instruments = $bdd->query('SELECT ID as ID, Nom as Nom, Cat as Cat, Descr as Descr, Img as Img, Prix as Prix FROM instruments');
    return $instruments;
}

function getInstrument($idInstrument){
    $bdd = getBDD(); 
    $instr = $bdd->prepare('SELECT ID as ID, Nom as Nom, Cat as Cat, Descr as Descr, Img as Img, Prix as Prix FROM instruments WHERE ID=?');
    $instr->execute(array($idInstrument));
    if ($instr->rowCount() == 1)
        return $instr->fetch(); 
    else
        throw new Exception("Aucun instrument ne correspond au numéro '$idInstrument'");
}

function getBDD(){
    $bdd = new PDO('mysql:host=localhost;dbname=musicstore;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}