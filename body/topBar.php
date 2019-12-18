<?php
    include "header.php";
?>
<div id="topBar" class="topnav">
    <a href="?view=accueil">ACCUEIL</a>
    <a href="?view=compte"  <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>GESTION COMPTES</a>
    <a href="?view=client" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>GESTION CLIENTS</a>
    <a href="?view=operation">GESTION OPERATIONS</a>
    <a href="?view=utilisateur" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>GESTION UTILISATEURS</a>
    <a href="/FinanceMaison.sn/controllerMaison/userController.php?deconnexion=1" id="deconnexion"><button class="btnDeconnexion">DECONNEXION</button></a>
</div>