<?php
include("vues/v_sommaireC.php");
$action=$_REQUEST['action'];
switch($action){
    //Selection du mois dont on veut afficher les visiteur ayant des fiches de frais
    case 'MoisASelectionner':{
        $lesMois=$pdo->getLesMoisAValider();
        include ("vues/v_listeMois.php");
        break;
    }
    //VIsiteurs ayant des fiches de frais pour le mois choisi dans MoisASelectionner
    case 'VisiteurAChoisir': {
        if (isset($_POST['lsMois'])) { // pour eviter l'erreur d'initialisation 
            $lsMois=$_POST['lsMois'];
            $_SESSION['lsMois'] = $lsMois;  
            $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
            include("vues/v_ListeDesVisiteurs.php");
        }
    }
    //affichage des fraisHorsForfais et des fraisForfais
    case 'tousLesForfait' : {
    //  N ° 1 Liste Deroulante : affichant les Mois 
        if(isset($_POST["CeVisiteur"])){
            
            $CeVisiteur=$_POST['CeVisiteur'];
            $lsMois=$_SESSION["lsMois"];
            $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
            $VisiteurSelect = $lesVisiteurs;
            include("vues/v_ListeDesVisiteurs.php");
            
            $lesMois=$pdo->getLesMoisDisponibles($CeVisiteur);        
            $moisASelectionner = $lesMois; 
            include ("vues/v_listeMois.php");
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