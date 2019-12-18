<?php
    require_once 'bd.php';
    function insererClient($cni, $nom, $prenom, $adresse,  $tel)
    {
        $insert = "INSERT INTO  client (cni, nom, prenom, adresse, tel) VALUES ('$cni', '$nom', '$prenom', '$adresse','$tel' )";
        /* OU BIEN
            $insert  = "INSERT INTO client VALUES(null, $cni, $nom, $prenom, $adresse, $tel);
     */
        global $bd;
        $bd -> exec($insert);
        return $bd -> lastInsertId();
    }
    function ajoutCompte($numero, $dateCreation, $solde, $idClient, $idGestCompte){
            $dateCreation = date("d-m-Y");
            // idClient = insererClient();
            $insert = "INSERT INTO compte VALUES (null, '$numero', '$dateCreation', 0, $idClient, $idGestCompte)";
            global $bd;
            $bd ->exec($insert);
            return $bd -> lastInsertId();
    }

    function genererNumero(){
        $id = 0;
        $sql = "SELECT max(id) FROM compte";
        global $bd;
        $array = $bd -> query($sql) -> fetch();
        if($array == NULL){
            $id=1;
        }else{
            $array[0]++;
            $id = $array[0];
        }
        $numero = "FSN_".date('d').date('m').date('Y')."_C".$id;
        return $numero;
    }

    function donneeCompte(){
        $sql = "select numero, dateCreation, solde from compte";
        global $bd;
        return $bd -> query($sql) ->fetchAll();
    }


?>