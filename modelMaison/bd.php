<?php
    $host = "localhost";
    $dbname = "finance_gl";
    $user = "root";
    $mdp = "";
        try
        {
            $bd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user,$mdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            echo 'CONNEXION REUSSIE!!!!';
        }
        catch (PDOException $e)
        {
            die('Erreur de connexion a la base de donnees ..! Veuillez contacter l\'administrateur (Tito :)...');
        }

/**
 * Created by PhpStorm.
 * User: Brice lefa
 * Date: 28/02/2019
 * Time: 11:42
 */
?>