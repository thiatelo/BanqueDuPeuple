$(document).ready(function () {
    var trouve = 1;
    $.ajax('../controller/compteController.php', {
        type: 'post',
        data: {trouve: trouve},
        cache : false
    })
        .done(function (reponse) {
            var comptes = JSON.parse(reponse);
            for(var i=0;i<comptes.length;i++){
                /*var row = '<tr>\
                                <td>'+comptes[i].numero+'</td><td>'+comptes[i].dateCreation+'</td><td>'+comptes[i].solde+'</td><td>'+comptes[i].prenom+" "+comptes[i].nom+'</td><td><a href="">BLOQUER</a> <a href="">ACTIVER</a> <a href="">BLOQUER</a> </td></tr>';

                $('#listCompte').last().append(row);*/
            }
        })
});