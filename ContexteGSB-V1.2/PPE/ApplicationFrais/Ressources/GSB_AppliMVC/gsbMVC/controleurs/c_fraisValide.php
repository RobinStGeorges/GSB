<?php
include("vues/v_sommaireC.php");
$action=$_REQUEST['action'];
switch($action){
    case 'MoisASelectionner':{
    $lesMois=$pdo->getLesMoisAValider();
    include ("vues/v_listeMois.php");
    break;
    }
    case 'VisiteurAChoisir': {
        if (isset($_POST['lsMois'])) { // pour eviter l'erreur d'initialisation 
            $lsMois=$_POST['lsMois'];
            $_SESSION['lsMois'] = $lsMois;  
            $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
            include("vues/v_ListeDesVisiteurs.php");
        }
    }
    case 'tousLesForfait' : {
        if(isset($_POST["CeVisiteur"])){
        $CeVisiteur=$_POST['CeVisiteur'];
        $_SESSION["CeVisiteur"]=$CeVisiteur;
        $lsMois=$_SESSION["lsMois"];
        $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
        include("vues/v_ListeDesVisiteurs.php");
        
        
        //  N ° 1 Liste Deroulante : affichant les Mois 
	$lsMois=$pdo->getLesMoisAValider();
        
	$moisASelectionner = $lsMois; // Permet de mettre la valeur choisie directement dans la liste deroulante 
	
        
        //N ° 2 Liste Deroulante : affichant les Visiteurs de la date 
       
        
      
        
        
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
    
        }
}
    
    
 
            

?>







