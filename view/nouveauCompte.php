<?php
include'../header.php';

?>
<style >
    body{
        background-image: url("../assets/img/univers.jpg");
        background-size: 100%;
    }
</style>

 <div class="container">
    
    <div class="row">
        
        <div class="col-sm-4 offset-sm-1 ">
            <form  method="POST" action="/BanqueDuPeuple/controller/compteController.php">
                
                    <legend class="text-white">INFOS CLIENT</legend>
            <table class="table table-borderless col-sm-8 offset-sm-2 table table-dark">
                <tr>
                    <td class="formul_tab"><input required type="text" placeholder="NUMERO CNI" name="cni" id="cni" class="champsNewC" /></td>
                    <td class="formul_tab"><input required type="text" placeholder="NOM" name="nom" id="nom" class="champsNewC" /></td>
                </tr>   
                <tr>
                    <td class="formul_tab"><input required type="text" placeholder="PRENOM" name="prenom" id="prenom" class="champsNewC" /></td>
                    <td class="formul_tab"><input required type="text" placeholder="ADRESSE" name="adresse" id="adresse" class=" champsNewC" /></td>
                </tr>
                <tr>   
                    <td colspan="2" class="formul_tab"><input required type="text" placeholder="TELEPHONE" name="tel" id="tel" class="champsNewC" /></td>
                </tr>
        </table>
    </fieldset>
                  <legend class="text-white">INFOS COMPTE</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2 table table-dark">
            <tr>
                <td class="formul_tab"><input  class="champsNewC" type="text" name="numero" id="numero" value="<?= $numero ?>" readonly/></td>
                <td class="formul_tab"><input required class="champsNewC" type="number" name="solde" id="solde" ></td>
            </tr>
        </table>
    </fieldset>
    <br><br>
    <div class="text-center"><input class="btn btn-info" type="submit" name="ajoutCompte" value="Valider" ></div>
</form>
            </form>
        </div>
    </div>

</div>
</form>



<?php
/**
 * Created by PhpStorm.
 * User: Brice lefa
 * Date: 21/02/2019
 * Time: 12:17
 */