<?php
            
            $lesUtilisateurs=$pdo->getInfosUtilisateurMois();
            foreach($lesUtilisateurs as $unUtilisateur) {
                $idUtilisateur=$unUtilisateur['idUtilisateur'];
                $nom=$unUtilisateur['nom'];
                $prenom=$unUtilisateur['prenom'];
                echo"<select name='lesUtilisateurs'>"; ?>
                <option value="<?php echo $idUtilisateur; ?>"><?php echo $nom; ?>/<?php echo $prenom; ?></option>
                </select>
                <?php                       
            
        }
?>
