<?php
require_once '../model/bd.php';
$sql = "DELETE FROM operation WHERE id = '".$_GET['idSupp']."'";
global $bd;
$resultat = $bd ->exec($sql);
echo $resultat;