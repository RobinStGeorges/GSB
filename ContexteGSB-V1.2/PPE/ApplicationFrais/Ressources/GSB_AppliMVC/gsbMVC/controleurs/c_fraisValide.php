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
            if (isset($_POST['lsMois'])) {
            $lsMois=$_POST['lsMois'];
            $SESSION['lsMois'] = $lsMois;  
            $lesVisiteurs = $pdo->getLesVisiteursAValider($lsMois);
            include ("vues/v_ListeDesVisiteurs.php");
            }
        }
            
    } 
    
    
            

?>







