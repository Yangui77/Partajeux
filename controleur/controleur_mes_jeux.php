<?php 
include_once('modele/modele_user.php');
if(isset($_POST['mes_jeux'])){
include('vue/vue_mes_jeux.php');
include('vue/vue_jeux_voulu.php');
}
?>