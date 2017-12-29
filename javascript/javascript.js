//afficher l'élément html avec en paramètre son id
function afficher(id)
{
document.getElementById(id).style.display = 'block';
}



$(document).ready(function(){

	$("#search").keyup(function(){
		
		var search = $(this).val();
		search = $.trim(search);

		if (search !== ""){

			$.post('controleur/controleur_barre_de_recherche.php',{search:search},function(data){

					$("#resultat_recherche").html(data);

			});
		}


	});

});

