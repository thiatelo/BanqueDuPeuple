<?php
    include "header.php";
?>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link bg-white" href="?view=accueil" > <span >Accueil</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-white"  href="?view=compte" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>GESTION COMPTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-white"  href="?view=client" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>GESTION CLIENTS</a>
                </li>
                
               
                <li class="nav-item mr-0    " style="float: right">
                    <a class="nav-link "  href="/BanqueDuPeuple/controller/userController.php?deconnexion=1" id="deconnexion"><button class="btn btn-outline-success my-2 my-sm-0">DECONNEXION</button></a>
                </li>
        </div>
    </nav>
</div>