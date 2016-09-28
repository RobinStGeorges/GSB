<?php
include("vues/v_sommaireC.php");
$action=$_REQUEST['action'];
switch($action){
        case 'validerFrais':{ 
            
            $lesMois=$pdo->getLesMoisDisponiblesC();
            ?>
            <select name="listeDesMois">
      	<?php 
        foreach($lesMois as $unMois){ 
      	$mois = $unMois['mois']; 
    	$numAnnee = $unMois['numAnnee']; 
    	$numMois = $unMois['numMois']; ?>
    		<?php if($mois == $moisASelectionner){ ?>
    		<option value="<?php echo $mois; ?>" selected><?php echo $numMois; ?>/<?php echo $numAnnee; ?></option>
    		<?php }else{ ?>
    		<option value="<?php echo $mois; ?>"><?php echo $numMois; ?>/<?php echo $numAnnee; ?></option>
    		<?php } ?>
    		<?php } ?>
            </select>
                <?php   
                 }
}
           
?>







