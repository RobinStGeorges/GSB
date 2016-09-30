<?php
include("vues/v_sommaireC.php");
$action=$_REQUEST['action'];
switch($action){
        case 'MoisASelectionner':{
            $lesMois=$pdo->getLesMoisAValider();
            include ("vues/v_listeMois.php");
            break;
        }
     
        
}          

            

?>







