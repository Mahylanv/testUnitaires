<?php
include '../inc/fonctions.inc.php';
include '../inc/header.inc.php';
include '../inc/nav.inc.php';

    // Restriction d'accès
?>
<link rel="stylesheet" href="../assets/css/profil.css">

        <div>
            <h1>Profil</h1>
        </div>

        <div class="profil-page">
            <div class="P1">
                <h2 class="pp">Votre profil</h2>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <h2><?php echo $_SESSION['user']['pseudo']; ?></h2>
                <h2><?php echo $_SESSION['user']['email']; ?></h2>
            </div>
            <div class="P2">
                <a href="profil.php?action=deconnexion" onclick="return(confirm(' êtes vous sûr ?'))">Deconnexion</a>
                <a id="rouge" href="accueil.php?action=quitter&id_user=<?php echo $_SESSION['user']['id_user'];?>" onclick="return(confirm(' êtes vous sûr ?'))">Supprimer mon compte</a>
            </div>
        </div>
        </li>

<?php
include '../inc/footer.inc.php';