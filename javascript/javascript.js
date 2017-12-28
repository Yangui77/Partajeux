//afficher l'élément html avec en paramètre son id
function afficher(id)
{
document.getElementById(id).style.display = 'block';
}


$(document).ready(
	function(){
		$('#search').keyup(function(){

		var search = $(this).val();
		search = $.trim(search);
		$('#resultat_recherche').text(search);
	});

});