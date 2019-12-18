
<?php
include'../header.php';

?>
<style >
    body{
        background-image: url("../assets/img/univers.jpg");
        background-size: 100%;
    }
</style>


<div class="operationsClient">
    <div class="menuOpers">

    </div>
    
        <form class="col-sm-6 offset-sm-3" action="../controller/operationController.php" method="POST" id="formOpertaionsCompte">
                <div>
                    <input type="text" name="numCompte" id="numClient" placeholder="numero compte client" class="form-control" style="margin-top:5%">
                </div>
            <h4 class="bg-danger text-center mt-5" id="message"></h4>
            <div id="transaction" style="display: none">
                <div><input type="text" name="numDest" id="numDest" placeholder="numero destinataire" class="form-control" style="margin-top:5%"></div><br>
                <div class="form-group">
                    <select class="form-control" name="type" id="">
                        <option  selected>depot</option>
                        <option >retrait</option>
                        <option >transfere</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <input name="solde" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary" value="Valider" name="val">
                </div>
            </div>
        </form>
    </div>
    <br/>
    <div class="affich_opers">
        <table id="tab_opers" class="table table-hover">
            <tr>
                <th class="text-white">NUMERO</th>
                <th class="text-white">DATE</th>
                <th class="text-white">MONTANT</th>
                <th class="text-white">TYPE OPERATION</th>
                <th class="text-white">ACTION</th>
            </tr>
            <?php

        $operation =$_SESSION['operations'];
        //var_dump($_SESSION);
        foreach ($operation as $key => $op) {

           echo '<tr><td class="text-white">"'.$op['numero'].'"</td>
           <td class="text-white">"'.$op['dateOperation'].'"</td>
           <td class="text-white">"'.$op['montant'].'"</td>
           <td class="text-white">"'.$op['nom'].'"</td>
           <td><button class="btnSupp" idAsupprimer ="'.$op['id'].'" >Supprimer</button></td>

           </tr>';
        }
?>
   
        </table>
    </div>
</div>
<script src="/mybank/assets/js/jquery-1.11.0.min.js"></script>
<script src="/mybank/assets/js/scriptOperation.js"></script>


<!--<p id="messageOp"></p>
<label for="compte" class="champLabel">Numero compte :</label>
    <input type="text" class="champsNewC" id="numCompteRecherche">
    <form method="POST" hidden>
        <fieldset id="newAccount">
            <legend>OPERATION</legend>
                        <!--<input type="text" placeholder="NUMERO GESTIONNAIRE UTILISATEUR" name="numeroCompteClient" id="numeroGestionnaire" class="champOperation"/><br>-->
                       <!-- <input type="number" placeholder="Montant" name="montant" id="montant" class="champOperation" required/><br>
                        <select  name="Type" class="champOperation" id="typeOP">
                        </select>
                        <input type="text" placeholder="numero destinataire" name="numeroCompteDestinataire" id="numeroDestinataire" class="champOperation" hidden/><br>
            <div class="aligner"><input type="submit" class="btn btnOperation" name="ajoutOperation" value="Valider" id="validerOperation" ></div>
        </fieldset>
    </form>
<br>
<button  id="btnListe" class="btn" hidden>Liste Operations</button>
<div id="listeOperation" hidden>
    <table border="1" id="tableOp" class="tableauPlein1">
        <tr>
            <th >id</th>
            <th >numero</th>
            <th >date operation</th>
            <th >montant</th>
            <th >id compte</th>
            <th >id type operation</th>
            <th >id user</th>
        </tr>
    </table>
</div>
--!>

