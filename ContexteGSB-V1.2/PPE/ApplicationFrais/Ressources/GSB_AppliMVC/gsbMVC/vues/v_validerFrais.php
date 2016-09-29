<?php
            $lesMois=$pdo->getLesMoisDisponiblesC();
            echo"<form method='POST' action='index.php?uc=c_fraisValide&action=voirFicheMois'>";
            echo"<select name='listeDesMois'>";
            foreach($lesMois as $unMois){ 
            $mois = $unMois['mois']; 
            $numAnnee = $unMois['numAnnee']; 
            $numMois = $unMois['numMois']; ?>
            <option value="<?php echo $mois; ?>"><?php echo $numMois; ?>/<?php echo $numAnnee; ?></option>
            <?php } ?>
            </select>

            <button type="submit"> Valider </button>
            </form>
