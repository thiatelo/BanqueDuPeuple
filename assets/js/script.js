/*$(document).ready(function(){
	 $('.btn').click(function(event){//lorsqu'on clique sur l'un des buttons dont la classe est btn
	 	var btnClick = $(event.target).closest('button'); //btnclick recupere l'evenement du button le plus proche
	  	var idAsupprimer = $(btnClick).attr('idAsupprimer');
	  	var idEditer = $(btnClick).attr('idEditer');
	  if (idAsupprimer) {// different de undefined
	  		if (confirm('VOULEZ-VOUS SUPPRIMER ?')) {
	  				// 	SUPPRESSION
	  		$.ajax({
	  			url: '/mybank/supprimerOperation.php', // ou?
	  			type:'POST', //comment ?
	  			data:{id: idAsupprimer},// avec ?
	  			success: function(result){ // que faire avec 
	  					if (result ==1) {
	  						//window.location.reload();//pour actualiser la page automatiquement
	  						var ligneAsup=$(btnClick).closest('tr');
	  						ligneAsup.css("background-color","red");
	  						ligneAsup.fadeOut(500,function(){
	  							$(this).remove();
	  						});
	  					}else{
	  						console.log('erreur lors de la supression');
	  					}

	  			}
	  		});
	  		};

	  }
	  }


	});
});
