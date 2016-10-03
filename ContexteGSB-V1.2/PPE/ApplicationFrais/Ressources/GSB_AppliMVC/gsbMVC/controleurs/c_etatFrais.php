<?php
include("vues/v_sommaireC.php");
$action = $_REQUEST['action'];
if (isset($_SESSION['idUtilisateur'])) { 
    $idUtilisateur = $_SESSION['idUtilisateur'];
}
switch($action){
    case 'selectionnerMois':{
	$lesMois=$pdo->getLesMoisAValider();
	// Afin de sélectionner par défaut le dernier mois dans la zone de liste
	// on demande toutes les clés, et on prend la première,
	// les mois étant triés décroissants
	$lesCles = array_keys( $lesMois );
	$moisASelectionner = $lesCles[0];
	include("vues/v_listeMois.php");
	break;
    }
    
    break;}
        


?>