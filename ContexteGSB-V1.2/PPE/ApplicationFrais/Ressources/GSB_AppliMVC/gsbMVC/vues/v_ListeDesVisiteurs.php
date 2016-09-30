 <div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=etatFrais&action=voirUtilisateurs" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesVisiteurs as $unVisiteur)
			{
                                $nom = $unVisiteur['mois'];
				$prenom =  $unVisiteur['numAnnee'];
				// $numMois =  $unVisiteur['numMois'];
				
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