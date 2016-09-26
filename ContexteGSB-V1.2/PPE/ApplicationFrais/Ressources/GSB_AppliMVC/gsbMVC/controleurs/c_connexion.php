<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$utilisateur = $pdo->getInfosUtilisateur($login,$mdp);
		if(!is_array( $utilisateur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
                        //Test apartenance Comptable ou utilisateur
                        $typeUser=$utilisateur['typeUser'];
			connecter($id,$nom,$prenom,$typeUser);
                        if ($typeUser==0){
			include("vues/v_sommaireV.php");
		}
                else {include("vues/v_sommaireC.php");}
		break;
	}
        }
        case 'deconnexion':{
			session_destroy();
			header("Location: index.php");
		break;
            }
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>
