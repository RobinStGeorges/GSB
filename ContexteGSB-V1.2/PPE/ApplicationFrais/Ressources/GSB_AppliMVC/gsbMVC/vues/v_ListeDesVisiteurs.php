 <div id="contenu">
      <h2>Les visiteurs concernés</h2>
      
      <form action="index.php?uc=gerer&action=detailfrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lsUtilisateurs" name="lsUtilisateurs">
            <?php
			foreach ($lesVisiteurs as $unUtilisateur)
			{
                                $nom = $unUtilisateur['mois'];
				$prenom =$unUtilisateur['numAnnee'];
				$numMois =  $unVisiteur['numMois'];
				
				?>
				<option selected value="<?php echo $nom ?>"><?php echo  $prenom ?> </option>
				<?php 
				
				 
				
				 
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