<?php
include '../model/account.php';

$message = '';
// Connexion
if ( isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    $pseudo = trim($_POST['pseudo']);
    $mdp = trim($_POST['mdp']);

    $connexion = $pdo->prepare("SELECT id_user, pseudo, mdp, email, statut FROM user WHERE pseudo = :pseudo");
    $connexion->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $connexion->execute();

    if($connexion->rowCount() > 0) {
        // on a récupéré une ligne donc le pseudo est ok
            $infos = $connexion->fetch(PDO::FETCH_ASSOC);
            if(password_verify($mdp, $infos['mdp'])) {
                // on enregistre les informations uitilisateurs dans la session
                $_SESSION['user'] = array();
                $_SESSION['user']['pseudo'] = $infos['pseudo'];
                $_SESSION['user']['email'] = $infos['email'];
                $_SESSION['user']['statut'] = $infos['statut'];
                $_SESSION['user']['id_user'] = $infos['id_user'];

                /*$_SESSION['user'] = array();
                foreach($infos AS $indice => $valeur) {
                    if($indice != 'mdp') {
                        $_SESSION['user'][$indice] = $valeur;
                    }
                }*/

                // redirection vers la page profil.php
                header('location: profil.php');
            } else {
            // erreur sur le mdp
            $message .= '<div class="incorrect">Attention, <br>Erreur sur le pseudo et/ou le mot de passe.</div>';
        }

    } else {
        $message .= '<div class="incorrect">Attention : le pseudo/mot de passe n\'est pas correct</div>';
    }
}

// Deconnexion
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
    session_destroy();
    header('location: accueil.php');
}


//Suppression du compte
if(isset($_GET['action']) && $_GET['action'] == 'quitter' && !empty($_GET['id_user'])) {
    delete_account($_GET['id_user']);
    session_destroy();
    $_SESSION['message'] = '<div class="alert alert-success">L\'user n°' . $_GET['id_user'] . ' a bien été supprimé.</div>';
    header('location: accueil.php');
}