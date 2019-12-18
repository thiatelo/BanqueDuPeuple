
<?php
include'../header.php';

?>
<style >
    body{
        background-image: url("../assets/img/univers.jpg");
        background-size: 100%;
    }
</style>

<?php
    require_once '../model/modelCompte.php';

    $numeroCompte = genererNumero();

    if (!isset($_GET['cin'])){
        header('location:/BanqueDuPeuple/view/indexFinance.php?view=client');
    }
    $cin = $_GET['cin'];
    $idClient = $_GET['idClient'];
?>

<div class="container">
    
        <h5 class="display-4 text-white">Nouveau Compte (<?= $cin ?>)</h5>
        <div class="col-sm-4 offset-sm-8">
            <form method="POST" action="/BanqueDuPeuple/controller/compteController.php">
                <input type="hidden" value="<?= $idClient ?>" name="idClient">
                <div class="form-group">
                    <label class="col-form-label-sm text-white">NUMERO COMPTE</label>
                    <input value="<?= $numeroCompte ?>" name="numero" type="text" class="form-control text-center" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label-sm text-white">SOLDE</label>
                    <input name="montant" min="0" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary" value="AjouterCompte" name="ajouterCompte2">
                </div>
                 <div class="form-group">
                    
 >
                </div>
            </form>
        </div>
    </div>
</div>