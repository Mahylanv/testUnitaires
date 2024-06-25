<?php
// Le controller : les traitements PHP
// on récupère le model (le chemin part depuis le fichier d'où est appelé celui ci)
include '../model/gestion_hotel.php';

if(!empty($_SESSION['message'])) {
    $msg .= $_SESSION['message'];
    unset($_SESSION['message']);
}

// Traitements PHP
// restriction d'accès : si l'utilisateur n'est pas admin, on redirige vers connexion.php
if( ! user_is_admin() ) {
    header('location: ../view/accueil.php');
}


// Récupération des catégorie et préparation des options du select
// $categories = get_categories();
// $options = '';
// foreach($categories AS $sous_tableau) {
//     $options .= '<option value="' . $sous_tableau['id_categorie'] . '">' . $sous_tableau['nom_categorie'] . '</option>';
// }


// Enregistrement des hotels
if( isset($_POST['titre']) && isset($_POST['img1']) && isset($_POST['img2']) && isset($_POST['img3']) && isset($_POST['description1']) && isset($_POST['description2']) && isset($_POST['map']) ) {
    $titre = trim($_POST['titre']);
    $img1 = trim($_POST['img1']);
    $img2 = trim($_POST['img2']);
    $img3 = trim($_POST['img3']);
    $description1 = trim($_POST['description1']);
    $description2 = trim($_POST['description2']);
    $map = trim($_POST['map']);
    

    create_post($titre, $img1, $img2, $img3, $description1, $description2, $map);
    header('location: ../view/gestion_hotel.php'); // on recharge la page afin de ne pas faire un double enregistrement en  rafraichissant la page
}

// Suppression d'une hotel
if(isset($_GET['action']) && $_GET['action'] == 'supprimer' && !empty($_GET['id_hotel'])) {
    delete_post($_GET['id_hotel']);
    $_SESSION['message'] = '<div class="alert alert-success">L\'hotel n°' . $_GET['id_hotel'] . ' a bien été supprimé.</div>';
    header('location: gestion_hotel.php');
}



// Affichage du tableau html
$liste_hotels = get_hotels();
$tableau = '';
foreach($liste_hotels AS $sous_tableau) {
    $tableau .= '<tr>';

    $tableau .= '<td>' . $sous_tableau['titre'] . '</td>';
    $tableau .= '<td>' . $sous_tableau['description1'] . '</td>';
    $tableau .= '<td>' . $sous_tableau['description2'] . '</td>';
    $tableau .= '<td><img src="' . $sous_tableau['img1'] . '" style="width: 100px;"></td>';
    $tableau .= '<td><img src="' . $sous_tableau['img2'] . '" style="width: 100px;"></td>';
    $tableau .= '<td><img src="' . $sous_tableau['img3'] . '" style="width: 100px;"></td>';
    $tableau .= '<td>' . $sous_tableau['map'] . '</td>';
    $tableau .= '<td><a href="?action=supprimer&id_hotel=' . $sous_tableau['id_hotel'] . '" class="btn btn-danger trash" onclick="return(confirm(\' êtes vous sûr ?\'))" ><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg></a></td>';

    $tableau .= '</tr>';
}

