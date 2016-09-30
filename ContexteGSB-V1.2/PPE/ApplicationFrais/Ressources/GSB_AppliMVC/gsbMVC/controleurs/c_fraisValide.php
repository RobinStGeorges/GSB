<?php
include("vues/v_sommaireC.php");
$action=$_REQUEST['action'];
switch($action){
        case 'MoisASelectionner':{
            $lesMois=$pdo->getLesMoisAValider();
            include ("vues/v_listeMois.php");
            break;
        }
        case 'voirUtilisateurs' : {
            $choixMois = $_POST['choixMois']; // On récupère le mois selectionné par le comptable 
            $_SESSION['choixMois'] = $choixMois;
            $lesUtilisateurs = $pdo->getLesVisiteursAValider($lesMois);
            include ("vues/v_ListeDesVisiteurs.php");
            break;
}

        
}          

            

?>







