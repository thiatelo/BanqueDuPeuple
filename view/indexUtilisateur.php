<?php
include'../header.php';

?>
<style >
    body{
        background-image: url("../assets/img/univers.jpg");
        background-size: 100%;
    }
</style>


<form method="POST" action="/BanqueDuPeuple/controller/userController.php" id="nouveauUtilisateur">
	<fieldset id="newAccount">
        <legend class="text-white">AJOUT UTILISATEUR</legend>
            <table class="table table-borderless col-sm-8 offset-sm-2 table table-dark">
                <tr>
                    <td class="formul_tab">
                    	<input type="text" placeholder="NOM" name="nom" id="nom" class="champsNewC"/>
                    </td>
                    <td class="formul_tab">
                    	<input type="text" placeholder="PRENOM" name="prenom" id="prenom" class="champsNewC"/>
                    </td>
                </tr>   
                <tr>
                    <td class="formul_tab">
                    	<input type="text" placeholder="LOGIN" name="login" id="login" class="champsNewC" required/>
                    </td>
                    <td class="formul_tab">
                    	<input type="password" placeholder="MOT DE PASSE" name="mdp" id="mdp" class="champsNewC" required/>
                    </td>
                </tr>
                <tr>   
                    <td colspan="2" class="formul_tab">
                    	<select class="champsNewC" name="profil">
                    		<option selected>admin</option>
                    		<option>Gestionnaire de comptes</option>
                    		<option>caissier</option>
                    	</select>
                    </td>
                </tr>
        </table>
    </fieldset>
    <br><br>
    <div class="text-center"><input class="btn btn-success" type="submit" name="ajoutCompte" value="Valider" ></div>
</form>
