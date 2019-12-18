<?php
session_start();
require_once '../model/modelCompte.php';
require_once '../model/modelOperation.php';

$entre = 0;
if(isset($_POST['num']) && $entre == 0){
    $entre = 1;
    $numeroCompte = $_POST['num'];
    if(findCompteByNumero($numeroCompte)) {
        echo "success";
    }
}

if (isset($_GET['recherche'])){
    $numero = $_GET['recherche'];
    $resultat=chercherNumero($numero);
    if (!$resultat){
        echo "0";
    }else{
        $etat = findCompteById($resultat[0])['etat'];
        if($etat == '0'){
            echo "bloque";
        }else{
            echo $resultat[0];
        }
    }
}
if((isset($_POST['somme'])) && (isset($_POST['num']))){

    $numeroCompte = $_POST['num'];
    $compte = findCompteByNumero($numeroCompte);
    $numeroOp = genererNumeroOperation();
    $date = date('d-m-Y');
    $montant = $_POST['somme'];
    $idUser = $_SESSION['idUser'];
    $idOP = getTypeOpByNom("depot")['id'];
    $idCompte = $compte[4];
    if(depot($numeroOp,$date,$montant,$idCompte,$idOP,$idUser)){
        echo'1';
    }
}

if(isset($_POST['numb1'])){
    $nDemandeur = $_POST['numb1'];
    $compte = findCompteByNumero($nDemandeur);
    $montDemandeur = $_POST['sommeDemand'];
    $numeroOp = genererNumeroOperation();
    $date = date('d-m-Y');
    $idUser = $_SESSION['idUser'];
    $idOP = getTypeOpByNom("retrait")['id'];
    $idCompte = $compte[4];
    if(retrait($numeroOp,$date,$montDemandeur,$idCompte,$idOP,$idUser)){
        echo 'Operation done';
    }
}

if (isset($_GET['typeOp'])){
    $typeOperations = getTypesOperation();
    echo json_encode($typeOperations);
}

if((isset($_GET['numDest'])) && (isset($_GET['num']))){

    $numCompte = $_GET['num'];
    $numDest = $_GET['numDest'];
    $compte = findCompteByNumero($numCompte);
    $compteDest = findCompteByNumero($numDest);
    $idDest = $compteDest[4];
    $montDemandeur = $_GET['sum'];
    $numeroOp = genererNumeroOperation();
    $date = date('d-m-Y');
    $idUser = $_SESSION['idUser'];
    $idOP = getTypeOpByNom("transfert")['id'];
    $idCompte = $compte[4];
    if(transfert($idDest,$numeroOp,$date,$montDemandeur,$idCompte,$idOP,$idUser)){
        echo 'Operation done';
    }else{
        echo 'error';
    }
}

    if (isset($_POST['val'])) {
        //var_dump($_POST);
        //die();
        extract($_POST);
        $dateCreation = date("d-m-Y");
        $numeroOp = genererNumeroOperation();
        $idGestCompte = $_SESSION['idUser']+0;
        $idTypeOperation = getTypeOpByNom($type)['id']+0;
        //echo "<BR>num ".$numCompte."<BR>";
        $compte = findCompteByNumero($numCompte);
          //var_dump($compte);
            //var_dump($dateCreation, $numeroOp, $idGestCompte, $idTypeOperation, $solde);
        $idCompte =$compte['id'];
        $solde = $solde+0;
        
        
        //====================================

        //====================================
        //var_dump($solde);
        //die;

        if ($type == 'depot') {
            //var_dump($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte);
            //die();
            echo $numeroOp."<br>";
            echo $idTypeOperation."<br>";
            echo $idGestCompte."<br>";
            echo $solde."<br>";
            echo $dateCreation."<br>";
            echo $idCompte."<br>";
            if(depot($numeroOp,$dateCreation,$solde,$idCompte,$idTypeOperation,$idGestCompte) > 0)

            {
                //var_dump($type);
                //die;
                $operations = listeOperations($idCompte);
                $_SESSION['operations'] = $operations;
                header('location:/mybank/view/indexFinance.php?view=operation&ok=1&op=1');
            }else{

                header('location:/mybank/view/indexFinance.php?view=operation&ok=1&op=0');
            }

        }
        if ($type== 'retrait') {
            //var_dump($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte);die();
            $retrait = retrait($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte);
            if($retrait)
            {
                $operations = listeOperations($idCompte);
                $_SESSION['operations'] = $operations;  
                header('location:/mybank/view/indexFinance.php?view=operation&ok=1&op=1');
            }else if ($retrait == (-2)) {
                header('location:/mybank/view/indexFinance.php?view=operation&ok=1&op=2');
            }else{
                header('location:/mybank/view/indexFinance.php?view=operation&ok=1&op=0');
            }
        }
        
    }
