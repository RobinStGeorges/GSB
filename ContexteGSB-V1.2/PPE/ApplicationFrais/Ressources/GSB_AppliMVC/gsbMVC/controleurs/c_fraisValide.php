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
            $SESSION['lsMois'] = $lsMois;  
            $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
            include("vues/v_ListeDesVisiteurs.php");
        }
    }
    case 'tousLesForfait' : {
        if (isset($_REQUEST['CeVisiteur']['lsMois'] )) {
            $CeVisiteur = $_REQUEST['CeVisiteur'];
            $lsMois = $_REQUEST['lsMois'];
        }
        $lesFraisForfait= $pdo->getLesFraisForfait($CeVisiteur,$lsmois);
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($CeVisiteur,$lsmois);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($CeVisiteur,$lsMois);
    } 
    
}  
            

?>







