<?php
include ("include/class.pdogsb.inc.php");

include("vues/v_sommaireC.php");

$action = $_REQUEST['action'];
$sql=$monPdo->prepare("select * from fichefrais where idetat!='cr'");
switch($action){
        case 'validerFrais':{ ?>
            <select name='valide'>
                <?php
                while($frais=$sql->fetch(PDO::FETCH_OBJ)){
                  $date=$frais->mois;
                  
                  $mois = getMois(date("d/m/Y"));
                  $numAnnee =substr( $mois,0,4);
                  $numMois =substr( $mois,4,2);
                  echo"<option value=$numMois"/"$numAnnee</option>";
                 }
                   
                 }
}
           
?>







