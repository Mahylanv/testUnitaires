<?php 
include '../inc/init.inc.php'; // initialisation du site

// Inscription
if( isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['mdp']) ) {
    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $mdp = trim($_POST['mdp']);
    // variable de controle 
    $erreur = false;
    // Contrôles :


    // taille du pseudo : entre 3 et 20
    $taille_pseudo = iconv_strlen($pseudo);
    if($taille_pseudo < 3 || $taille_pseudo > 20) {
        $msg .= '<div class="incorrect">Attention : le pseudo doit avoir entre 3 et 20 caractères</div>';
        $erreur = true;
    } 

    // caractere dans le pseudo
    // On test la taille du pseudo avec une expression réguliere
    $verif_caracteres = preg_match('#^[A-Za-z0-9]+$#', $pseudo);
    /*  Expression régulière :
        ----------------------
        - dans les [] tous les caractères autorisés (les lettres majuscules et minuscules et les chiffres)
        - les # permettent de préciser le début et la fin de l'expression (sinon il est possible d'utiliser les slashs /)
        - le + permet de dire que l'on peut avoir plusieurs fois le même caractères dans la chaine
        - le ^ permet de dire la chaine doit obligatoirement commencer par les caractères proposés
        - le $ permet de dire la chaine doit obligatoirement finir par les caractères proposés
        - lorsque l'on bloque le début et la fin, toutes la chaine ne peut contenir que ces caractères
    */
    if($verif_caracteres != true) {
        $msg .= '<div class="incorrect">Attention : le pseudo ne peut contenir ques des caracteres alphanumériques</div>';
        $erreur = true;
    }


    // disponibilité du pseudo (pseudo en index unique dans la BDD)
    $verif_pseudo = $pdo->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
    $verif_pseudo->bindParam(':pseudo', $pseudo,PDO::PARAM_STR);
    $verif_pseudo->execute();
    if($verif_pseudo->rowCount() > 0) /* si on a plus de 0 lignes qui correspondent*/ {
        $msg .= '<div class="incorrect">Attention : le pseudo est indisponible</div>';
        $erreur = true;
    }


    // format du mail 
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg .= '<div class="incorrect">Attention : le format du mail ne correspond pas</div>';
        $erreur = true;
    }


    // disponibilité du mail (mail en index unique dans la BDD)
    $verif_mail = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $verif_mail->bindParam(':email', $email,PDO::PARAM_STR);
    $verif_mail->execute();
    if($verif_mail->rowCount() > 0) /* si on a plus de 0 lignes qui correspondent*/ {
        $msg .= '<div class="incorrect">Attention : le mail est indisponible</div>';
        $erreur = true;
    }

    // taille du mdp : minimum 4
    if(iconv_strlen($mdp) < 4) {
        $msg .= '<div class="incorrect">Attention : le mot de passe doit avoir 4 caracteres minimum</div>';
        $erreur = true;
    } 


    // enregistrement 
    if($erreur == false) {
        // cryptage du mdp : bonne pratique : password_hash($mdp, PASSWORD_DEFAULT)
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $enregistrement = $pdo->prepare("INSERT INTO user (pseudo, mdp, email, statut) VALUES (:pseudo, :mdp, :email, 1)");
        $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $enregistrement->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
        $enregistrement->execute();
    }
      
}

function delete_account($id_user) {
    global $pdo;
    $suppression = $pdo->prepare("DELETE FROM user WHERE id_user = :id_user");
    $suppression->bindParam(':id_user', $id_user, PDO::PARAM_STR);
    $suppression->execute();
}