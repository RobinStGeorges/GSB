 <div id="contenu">
      <h2>Les visiteurs concernés</h2>
      
      <form action="index.php?uc=fraisValide&action=tousLesForfait" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lsUtilisateurs" name="CeVisiteur">
            <?php
			foreach ($lesVisiteurs as $unVisiteur)
                        {   
                                $id=$unVisiteur['id'];
                                $nom =$unVisiteur['nom'];
				$prenom=$unVisiteur['prenom'];
				
				if ($unVisiteur == $unVisiteur['id']) { 
				?>
				<option selected value="<?php echo $id ?>"><?php echo  $nom ?><?php echo $prenom ?> </option>
                                <?php } else { ?>
                                
                                    <option value="<?php echo $id ?>"><?php echo  $nom ?><?php echo $prenom ?> </option>
                                <?php         } 
                                
                        }   
            ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>