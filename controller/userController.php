<?php
    session_start();
    require_once '../model/modelUser.php';
    if (isset($_POST['connexion']))
    {
        extract($_POST);
        $user = verifierConnexion($login, $mdp);

        if($user != null)
        {
            $_SESSION['profil'] = $user['profil'];
            $_SESSION['nomComplet'] = $user['nom'].' '.$user['prenom'];
            /* OU
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
            */
            $_SESSION['idUser'] = $user['id'];
            header('location:/BanqueDuPeuple/view/indexFinance.php');
        }
        else
        {
            header('location:/BanqueDuPeuple/index.php?connexion=0');
            return;
        }

    }
    if (isset($_GET['deconnexion']))
    {
        session_unset();
        $_SESSION = array();
        header('location:/BanqueDuPeuple/index.php');
    }
    $id = NULL;
    $nom = $_POST['nom'];
    $pnom = $_POST['prenom'];
    $log = $_POST['login'];
    $mdpass = $_POST['mdp'];
    $profil = filter_input(INPUT_POST,'profil');
    insererUtilisateur($id,$nom,$pnom,$log,$mdpass,$profil);
?>