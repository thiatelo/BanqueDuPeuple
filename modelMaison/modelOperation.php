<?php
    require_once 'bd.php';
    function getTypeOpByNom($nom){
        $sql =" SELECT *FROM typeoperation WHERE nom='$nom'";
        global $bd;
        return $bd -> query($sql) ->fetch();
    }
    function depot($numero, $montant, $numeroOpe){
            $sql = "select id from compte where numero = '$numero'";
            global $bd;
            $idCompte = $bd -> query($sql) ->fetch();

            $sql1 = "select id from typeoperation where nom = 'depot'";
            global $bd;
            $idTypeOp = $bd -> query($sql1) ->fetch();

            //$idUser =$_SESSION['idUser'];
            $dateOperation = date("d-m-Y");

            $sql2= "INSERT INTO operation VALUES (null , '$numeroOpe','$dateOperation', '$montant', '$idCompte[0]','$idTypeOp[0]',1)";
            global $bd;
            if($bd -> exec($sql2) > 0){
                $sql2 = "UPDATE compte SET  solde = solde + $montant where id = $idCompte[0]";
                return $bd -> exec($sql2);
            }

    }

    function genererNumeroOperation(){
        $id = 0;
        $sql = "SELECT max(id) FROM operation";
        global $bd;
        $array = $bd -> query($sql) -> fetch();
        if($array == NULL){
            $id=1;
        }else{
            $array[0]++;
            $id = $array[0];
        }
        $numero = "FSN_".date('d').date('m').date('Y')."_OP".$id;
        return $numero;
    }
	
    function retrait($numero, $montant, $numeroOpe){
        $sql = "select id from compte where numero = '$numero'";
        global $bd;
        $idCompte = $bd -> query($sql) ->fetch();

        $sql1 = "select id from typeoperation where nom = 'retrait'";
        global $bd;
        $idTypeOp = $bd -> query($sql1) ->fetch();
        //echo $idTypeOp[0];
        $dateOperation = date("d-m-Y");
        $sql = "INSERT INTO operation VALUES (null, '$numeroOpe', '$dateOperation', '$montant', '$idCompte[0]', '$idTypeOp[0]', 1)";
        global $bd;
        if ($bd -> exec($sql) >0){
            $sql1 = "UPDATE compte SET  solde = solde - $montant where id = $idCompte[0]";
            return $bd -> exec($sql1);
        }
    }

    function verifierMontantRestant($numero, $montant){
        $sql = "select solde from compte where numero = '$numero'";
        global $bd;
        $solde = $bd -> query($sql) -> fetch();
        return ($solde[0] - $montant);
    }

    function donneeOperation($numero){
        $sql = "select o.numero, o.dateOperation, o.montant, t.nom from compte c inner join operation o on c.numero='$numero' and (c.id = o.idCompte) inner join typeOperation t on o.idTypeOpe = t.id ";
        global $bd;
        return $bd -> query($sql) -> fetchAll();
    }

function transfert($numero,$numeroDestinataire, $montant, $numeroOpe){
    $sql = "select id from compte where numero = '$numero'";
    global $bd;
    $idCompte = $bd -> query($sql) ->fetch();

    $sql1 = "select id from typeoperation where nom = 'retrait'";
    global $bd;
    $idTypeOp = $bd -> query($sql1) ->fetch();
    //echo $idTypeOp[0];
    $dateOperation = date("d-m-Y");
    $sql = "INSERT INTO operation VALUES (null, '$numeroOpe', '$dateOperation', '$montant', '$idCompte[0]', '$idTypeOp[0]', 1)";
    global $bd;
    if ($bd -> exec($sql) >0){
        $sql1 = "UPDATE compte SET  solde = solde - $montant where id = $idCompte[0]";
        return $bd -> exec($sql1);
    }
}

        // Creer la fonction de retrait
?>