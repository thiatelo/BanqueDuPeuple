
<?php
include'/header.php';

?>
<style >
    body{
        background-image: url("../assets/img/univers.jpg");
        background-size: 100%;
    }
</style>


<?php
	include 'header.php';
?>
<div class="jumbotron">
<div class="container">
    <div class="row">
        <form autocomplete="off" method="POST" id="formConnex" action="/BanqueDuPeuple/controller/userController.php" class="col-md-4 offset-md-4">
            <h5 class="display-4 mt-5">
                CONNEXION
            </h5>
            <p>
                <?php
                if(isset($_GET['connexion']) && $_GET['connexion'] == 0)
                {
                    echo 'LOGIN OU MOT DE PASSE INCORRECT...';
                }
                ?>
            </p>
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" name="login" aria-describedby="emailHelp" placeholder="Entrer votre login">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" placeholder="Entrer votre mot de passe">
            </div>
            
            <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary" />
        </form>
    </div>
</div>
</div>