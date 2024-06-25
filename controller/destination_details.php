<?php 
include '../model/destination_details.php';

$details_destination = get_destination_details();
$details = '';
foreach($details_destination AS $sous_tableau) {
    $details .= '<section class="etiquette">';
    $details .=    '<div class="pinbleu">';
    $details .=        '<img class="hover"  src="' . $sous_tableau['img2'] . '">';
    $details .=        '<img class="bleu"  src="../assets/img/pinbleu.png">';
    $details .=    '</div>';
    $details .=    '<div class="pintxt">';
    $details .=       '<p class="meta">' . $sous_tableau['description1'] . '</p>';
    $details .=    '</div>';
    $details .= '</section>'; 
    $details .=    '<br>';
    $details .= '<section class="etiquette2">'; 
    $details .=    '<div class="pinjaune">';
    $details .=        '<img class="hover"  src="' . $sous_tableau['img3'] . '">';
    $details .=        '<img class="jaune"  src="../assets/img/pinjaune.png">';
    $details .=    '</div>';
    $details .=    '<div class="pintxt">';
    $details .=       '<p class="meta">' . $sous_tableau['description2'] . '</p>';
    $details .=    '</div>';
    $details .= '</section>'; 
}

