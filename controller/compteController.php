<?php
session_start();
require_once '../model/modelCompte.php';
require_once '../model/modelOperation.php';
if(isset($_POST['ajoutCompte'])){
    extract($_POST);
    $dateCreation = date("d-m-Y");
    $idClient = insererClient($cni, $nom, $prenom, $adresse,  $tel);
    $idGestCompte = $_SESSION['idUser'];
    $idCompte = ajoutCompte($numero, $dateCreation, 0,$idClient,$idGestCompte);
    if($idCompte > 0){
       $idTypeOperation = getTypeOpByNom("depot")['id'];
       $numeroOp = genererNumeroOperation();
       if(depot($numeroOp,$dateCreation,$solde,$idCompte,$idTypeOperation,$idGestCompte)>0){
            header('location:/BanqueDuPeuple/view/indexFinance.php?view=compte');
       }else{
           header('location:/BanqueDuPeuple/view/indexFinance.php?view=nouveauCompte&ok=0');

       }
    }
}

if (isset($_POST['ajouterCompte2'])){//Ajouter un nouveau compte pour un client existant
    extract($_POST);
    ajoutCompte2($numero,$montant,$idClient);
    header('location:/BanqueDuPeuple/view/indexFinance.php?view=compte');
}

if(isset($_POST['numb'])) {
    $numbCompte = $_POST['numb'];
    $listeOperation = listeOperations($numbCompte);
    echo json_encode($listeOperation);
}

if(isset($_POST['trouve'])) {
    $comptes = listeComptes();
    echo json_encode($comptes);
}

if (isset($_GET['action'])){
    $etat = $_GET['action']=="bloquer" ? 0 : 1;
    $idCompte = $_GET['idCompte'];
    updateEtat($etat,$idCompte);
    header("location:/BanqueDuPeuple/view/indexFinance.php?view=compte");
}









