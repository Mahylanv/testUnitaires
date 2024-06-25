<?php
// Le controller : les traitements PHP
// on récupère le model (le chemin part depuis le fichier d'où est appelé celui ci)
include '../model/gestion_destination.php';

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
$destination = get_continent_destination();
$options = '';
foreach($destination AS $sous_tableau) {
    $options .= '<option value="' . $sous_tableau['id_continent'] . '">' . $sous_tableau['continent_destination'] . '</option>';
}


// Enregistrement des destinations
if( isset($_POST['titre']) && isset($_POST['img1']) && isset($_POST['img2']) && isset($_POST['img3']) && isset($_POST['description1']) && isset($_POST['description2']) && isset($_POST['id_continent']) && isset($_POST['map']) ) {
    $titre = trim($_POST['titre']);
    $img1 = trim($_POST['img1']);
    $img2 = trim($_POST['img2']);
    $img3 = trim($_POST['img3']);
    $description1 = trim($_POST['description1']);
    $description2 = trim($_POST['description2']);
    $id_continent = trim($_POST['id_continent']);
    $map = trim($_POST['map']);
    

    create_post($titre, $img1, $img2, $img3, $description1, $description2, $id_continent, $map);
    header('location: ../view/gestion_destination.php'); // on recharge la page afin de ne pas faire un double enregistrement en  rafraichissant la page
}

// Suppression d'une destination
if(isset($_GET['action']) && $_GET['action'] == 'supprimer' && !empty($_GET['id_destination'])) {
    delete_post($_GET['id_destination']);
    $_SESSION['message'] = '<div class="alert alert-success">L\'destination n°' . $_GET['id_destination'] . ' a bien été supprimé.</div>';
    header('location: gestion_destination.php');
}

// Affichage des card dans destination.php
$liste_destinations = get_destinations();
$tableau = '';
foreach($liste_destinations AS $sous_tableau) {
    $tableau .= '<tr>';

    $tableau .= '<td>' . $sous_tableau['titre'] . '</td>';
    $tableau .= '<td>' . $sous_tableau['description1'] . '</td>';
    $tableau .= '<td>' . $sous_tableau['description2'] . '</td>';
    $tableau .= '<td><img src="' . $sous_tableau['img1'] . '" style="width: 100px;"></td>';
    $tableau .= '<td><img src="' . $sous_tableau['img2'] . '" style="width: 100px;"></td>';
    $tableau .= '<td><img src="' . $sous_tableau['img3'] . '" style="width: 100px;"></td>';
    $tableau .= '<td>' . $sous_tableau['continent_destination'] . '</td>';
    $tableau .= '<td>' . $sous_tableau['id_destination'] . '</td>';
    $tableau .= '<td><a href="../view/update_destination.php?id_destination=' . $sous_tableau['id_destination'] . '" class="btn btn-danger trash"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></a><a href="?action=supprimer&id_destination=' . $sous_tableau['id_destination'] . '" class="btn btn-danger trash" onclick="return(confirm(\' êtes vous sûr ?\'))" ><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg></a></td>';

    $tableau .= '</tr>';
}


