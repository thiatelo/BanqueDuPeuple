<?php
    require_once 'bd.php';

    function infoClient($idClient){
        global $bd;
        $sql = "SELECT * FROM client WHERE id=$idClient";
        return $bd->query($sql)->fetch();
    }

    function listeClients(){
        global $bd;
        $sql = "SELECT * FROM client";
        return $bd->query($sql)->fetchAll();
    }
    function findClientByCni($cni){
    $sql = "SELECT * FROM client WHERE cni  = '$cni'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}

