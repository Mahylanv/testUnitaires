<?php
include '../inc/init.inc.php'; // initialisation du site
function get_destination_details() {
    global $pdo;
    $getid_destination = $_GET['id'];
    $details_destination = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND d.id_destination = $getid_destination");

    return $details_destination->fetchAll(PDO::FETCH_ASSOC);
}