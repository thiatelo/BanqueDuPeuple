<?php
    require_once 'bd.php';

    function verifierConnexion($login, $mdp)
    {
        $sql = "SELECT * FROM utilisateur WHERE login='$login' AND password = '$mdp'";
        global $bd;
        return $bd -> query($sql) -> fetch();
        // fetch permet de retourner un seul resultat
    }
    function verifierCompte($num){
        $sql ="SELECT *FROM compte where numero = '$num'";
        global $bd;
        $donnee = $bd -> query($sql) -> fetch();
        return $donnee;
    }

    function donneeDepot($montant){
            $sql= "SELECT *FROM operation compte where ";
    }
?>