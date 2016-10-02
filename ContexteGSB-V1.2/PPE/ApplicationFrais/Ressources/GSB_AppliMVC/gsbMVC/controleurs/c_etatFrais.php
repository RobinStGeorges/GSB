<?php
include("vues/v_sommaireC.php");
$action = $_REQUEST['action'];
if (isset($_SESSION['idUtilisateur'])) { 
    $idUtilisateur = $_SESSION['idUtilisateur'];
}
switch($action){
    case 'selectionnerMois':{
	$lesMois=$pdo->getLesMoisDisponibles($idUtilisateur);
	// Afin de sélectionner par défaut le dernier mois dans la zone de liste
	// on demande toutes les clés, et on prend la première,
	// les mois étant triés décroissants
	$lesCles = array_keys( $lesMois );
	$moisASelectionner = $lesCles[0];
	include("vues/v_listeMois.php");
	break;
    }
    case 'voirEtatFrais':{
        if (isset($_SESSION['lsMois'])&&isset($_SESSION['CeVisiteur'] )) {
	
        
        
        //  N ° 1 Liste Deroulante : affichant les Mois 
	$lesMois=$pdo->getLesMoisAValider();
        $lsMois = $_REQUEST['lsMois']; 
	$moisASelectionner = $lsMois; // Permet de mettre la valeur choisie directement dans la liste deroulante 
	include("vues/v_listeMois.php");
        
        //N ° 2 Liste Deroulante : affichant les Visiteurs de la date 
        $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
        $CeVisiteur = $_REQUEST['CeVisiteur'];
        include ('vues/v_ListeDesVisiteurs.php');
        
        // Affichage de la fiche entiere pour le visiteur et le mois sélectionné 
	$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($CeVisiteur,$lsMois);
	$lesFraisForfait= $pdo->getLesFraisForfait($CeVisiteur,$lsMois);
	$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($CeVisiteur,$lsMois);
	$numAnnee =substr($lsMois,0,4);
	$numMois =substr($lsMois,4,2);
	$libEtat = $lesInfosFicheFrais['libEtat'];
	$montantValide = $lesInfosFicheFrais['montantValide'];
	$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
	$dateModif =  $lesInfosFicheFrais['dateModif'];
	$dateModif =  dateAnglaisVersFrancais($dateModif);
	include("vues/v_etatFrais.php");
        }
        break;}
        
    }

?>