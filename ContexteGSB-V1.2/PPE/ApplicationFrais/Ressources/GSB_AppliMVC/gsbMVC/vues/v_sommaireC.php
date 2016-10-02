<!-- Division pour le sommaire -->
<div id="menuGauche">
    <div id="infosUtil">
        <!--à Choisir -->
        <h2> </h2>
    </div>  
    <ul id="menuList">
	<li >
            Comptable :<br>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
	</li>
        <li class="smenu">
            <a href="index.php?uc=fraisValide&action=MoisASelectionner" title="Fiche de frais à valider ">Fiche de Frais à valider </a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>
    