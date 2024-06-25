<?php 
include '../inc/init.inc.php'; // initialisation du site
// Le model : les requetes SQL
// Recuperation des destinations pour affichage dans un tableau html 
// Différenciation par continent
function get_destinations_afrique() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND c.continent_destination = 'Afrique' ");

    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}

function get_destinations_ameriqueN() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND c.continent_destination = 'Amerique Du Nord' ");

    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}

function get_destinations_ameriqueS() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND c.continent_destination = 'Amerique Du Sud' ");

    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}

function get_destinations_asie() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND c.continent_destination = 'Asie' ");

    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}

function get_destinations_europe() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND c.continent_destination = 'Europe' ");

    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}

function get_destinations_oceanie() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND c.continent_destination = 'Oceanie' ");

    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}

