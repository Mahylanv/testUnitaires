<?php
include '../model/destination.php';
// Affichage du tableau html

$liste_destinations = get_destinations_afrique();
$destination_cards_afrique = '';
foreach($liste_destinations AS $sous_tableau) {
    $destination_cards_afrique .= '<div class="card2 box">';
    $destination_cards_afrique .=   '<div class="image-box2">';
    $destination_cards_afrique .=       '<img src="' . $sous_tableau['img1'] . '">';
    $destination_cards_afrique .=   '</div>';
    $destination_cards_afrique .=   '<div class="text2">';
    $destination_cards_afrique .=       '<p class="meta">' . $sous_tableau['continent_destination'] . '</p>';
    $destination_cards_afrique .=       '<div class="svg">';
    $destination_cards_afrique .=           '<h2>' . $sous_tableau['titre'] . '</h2>';
    $destination_cards_afrique .=       '</div>';
    $destination_cards_afrique .=       '<p class="descript">' . $sous_tableau['description1'] . '</p>';
    $destination_cards_afrique .=    '</div>';
    $destination_cards_afrique .=    '<a href="destination_details.php?id='. $sous_tableau['id_destination'] .'">En savoir plus</a>';
    $destination_cards_afrique .=  '</div>';   
}

$liste_destinations = get_destinations_ameriqueN();
$destination_cards_ameriqueN = '';
foreach($liste_destinations AS $sous_tableau) {
    $destination_cards_ameriqueN .= '<div class="card2 box">';
    $destination_cards_ameriqueN .=   '<div class="image-box2">';
    $destination_cards_ameriqueN .=       '<img src="' . $sous_tableau['img1'] . '">';
    $destination_cards_ameriqueN .=   '</div>';
    $destination_cards_ameriqueN .=   '<div class="text2">';
    $destination_cards_ameriqueN .=       '<p class="meta">' . $sous_tableau['continent_destination'] . '</p>';
    $destination_cards_ameriqueN .=       '<div class="svg">';
    $destination_cards_ameriqueN .=           '<h2>' . $sous_tableau['titre'] . '</h2>';
    $destination_cards_ameriqueN .=       '</div>';
    $destination_cards_ameriqueN .=       '<p class="descript">' . $sous_tableau['description1'] . '</p>';
    $destination_cards_ameriqueN .=    '</div>';
    $destination_cards_ameriqueN .=    '<a href="destination_details.php?id='. $sous_tableau['id_destination'] .'">En savoir plus</a>';
    $destination_cards_ameriqueN .=  '</div>';   
}

$liste_destinations = get_destinations_ameriqueS();
$destination_cards_ameriqueS = '';
foreach($liste_destinations AS $sous_tableau) {
    $destination_cards_ameriqueS .= '<div class="card2 box">';
    $destination_cards_ameriqueS .=   '<div class="image-box2">';
    $destination_cards_ameriqueS .=       '<img src="' . $sous_tableau['img1'] . '">';
    $destination_cards_ameriqueS .=   '</div>';
    $destination_cards_ameriqueS .=   '<div class="text2">';
    $destination_cards_ameriqueS .=       '<p class="meta">' . $sous_tableau['continent_destination'] . '</p>';
    $destination_cards_ameriqueS .=       '<div class="svg">';
    $destination_cards_ameriqueS .=           '<h2>' . $sous_tableau['titre'] . '</h2>';
    $destination_cards_ameriqueS .=       '</div>';
    $destination_cards_ameriqueS .=       '<p class="descript">' . $sous_tableau['description1'] . '</p>';
    $destination_cards_ameriqueS .=    '</div>';
    $destination_cards_ameriqueS .=    '<a href="destination_details.php?id='. $sous_tableau['id_destination'] .'">En savoir plus</a>';
    $destination_cards_ameriqueS .=  '</div>';   
}

$liste_destinations = get_destinations_asie();
$destination_cards_asie = '';
foreach($liste_destinations AS $sous_tableau) {
    $destination_cards_asie .= '<div class="card2 box">';
    $destination_cards_asie .=   '<div class="image-box2">';
    $destination_cards_asie .=       '<img src="' . $sous_tableau['img1'] . '">';
    $destination_cards_asie .=   '</div>';
    $destination_cards_asie .=   '<div class="text2">';
    $destination_cards_asie .=       '<p class="meta">' . $sous_tableau['continent_destination'] . '</p>';
    $destination_cards_asie .=       '<div class="svg">';
    $destination_cards_asie .=           '<h2>' . $sous_tableau['titre'] . '</h2>';
    $destination_cards_asie .=       '</div>';
    $destination_cards_asie .=       '<p class="descript">' . $sous_tableau['description1'] . '</p>';
    $destination_cards_asie .=    '</div>';
    $destination_cards_asie .=    '<a href="destination_details.php?id='. $sous_tableau['id_destination'] .'">En savoir plus</a>';
    $destination_cards_asie .=  '</div>';   
}

$liste_destinations = get_destinations_europe();
$destination_cards_europe = '';
foreach($liste_destinations AS $sous_tableau) {
    $destination_cards_europe .= '<div class="card2 box">';
    $destination_cards_europe .=   '<div class="image-box2">';
    $destination_cards_europe .=       '<img src="' . $sous_tableau['img1'] . '">';
    $destination_cards_europe .=   '</div>';
    $destination_cards_europe .=   '<div class="text2">';
    $destination_cards_europe .=       '<p class="meta">' . $sous_tableau['continent_destination'] . '</p>';
    $destination_cards_europe .=       '<div class="svg">';
    $destination_cards_europe .=           '<h2>' . $sous_tableau['titre'] . '</h2>';
    $destination_cards_europe .=       '</div>';
    $destination_cards_europe .=       '<p class="descript">' . $sous_tableau['description1'] . '</p>';
    $destination_cards_europe .=    '</div>';
    $destination_cards_europe .=    '<a href="destination_details.php?id='. $sous_tableau['id_destination'] .'">En savoir plus</a>';
    $destination_cards_europe .=  '</div>';   
}

$liste_destinations = get_destinations_oceanie();
$destination_cards_oceanie = '';
foreach($liste_destinations AS $sous_tableau) {
    $destination_cards_oceanie .= '<div class="card2 box">';
    $destination_cards_oceanie .=   '<div class="image-box2">';
    $destination_cards_oceanie .=       '<img src="' . $sous_tableau['img1'] . '">';
    $destination_cards_oceanie .=   '</div>';
    $destination_cards_oceanie .=   '<div class="text2">';
    $destination_cards_oceanie .=       '<p class="meta">' . $sous_tableau['continent_destination'] . '</p>';
    $destination_cards_oceanie .=       '<div class="svg">';
    $destination_cards_oceanie .=           '<h2>' . $sous_tableau['titre'] . '</h2>';
    $destination_cards_oceanie .=       '</div>';
    $destination_cards_oceanie .=       '<p class="descript">' . $sous_tableau['description1'] . '</p>';
    $destination_cards_oceanie .=    '</div>';
    $destination_cards_oceanie .=    '<a href="destination_details.php?id='. $sous_tableau['id_destination'] .'">En savoir plus</a>';
    $destination_cards_oceanie .=  '</div>';   
}

