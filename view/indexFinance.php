<?php
    session_start();
    require_once '../model/modelCompte.php';
    if ($_SESSION == null)
    {
        header("location:/BanqueDuPeuple/index.php");
    }
    else
    {
        include '../topBar.php';
        echo '<div class="container">';
        if (isset($_GET['view']))
        {
            switch ($_GET['view'])
            {
                case 'ajoutCompte':
                    include 'ajoutCompte.php';
                    break;
                case 'operations':
                    include 'operations.php';
                    break;
                case 'compte':
                    include 'indexCompte.php';
                    break;
                case 'accueil':
                    include 'accueil.php';
                    break;
                case 'client':
                    include 'clients.php';
                    break;
                     case 'recherche':
                    include 'recherche.php';
                    break;
                case 'operation':
                      if (isset($_GET['op']) && $_GET['op']==2) {
                          echo "OPERATION ECHOUEE!!!";
                      }
                        include 'indexOperation.php';
                   
                    break;
                case 'nouveauCompte':
                    $numero = genererNumero();

                        if(isset($_GET['ok'])){
                            if(isset($_GET['ok']) == 1){
                                echo ' COMPTRE CREE AVEC SUCCES !!!';
                            }
                        }

                        include 'nouveauCompte.php';


                    break;
                case 'utilisateur':
                    include 'indexUtilisateur.php';
                    break;
                default:
                    include_once 'erreur.php';
                    break;
            }
        }
        else
        {
            include_once 'accueil.php';
        }
        echo '</div>';

    }
    //var_dump($_SESSION);


include '../footer.php';



?>


