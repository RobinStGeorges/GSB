<?php
include("vues/v_sommaireC.php");
$action=$_REQUEST['action'];
switch($action){
        case 'MoisASelectionner':{
            $lesMois=$pdo->getLesMoisAValider();
            include ("vues/v_listeMois.php");
            break;
        }/*
        case 'voirUtilisateurs' : {
            $lesMois = $_POST['lesMois'];
            $_SESSION['les'] = $lesMois;
            $lesUtilisateurs = $pdo->getLesVisiteursAValider($lesMois);
            include ("vues/v_voirFicheMois.php");
            break;
}

        
}        */  

            
}
?>







