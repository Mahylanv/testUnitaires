<?php
include_once __DIR__ . '/../inc/init.inc.php'; // Utiliser un chemin absolu pour inclure le fichier

function update_destination($titre, $img1, $img2, $img3, $description1, $description2, $map) {
    global $pdo;
    $id = $_GET['id_destination'];
    $enregistrement = $pdo->prepare("UPDATE destination SET titre = :titre, img1 = :img1, img2 = :img2, img3 = :img3, description1 = :description1, description2 = :description2, map = :map WHERE id_destination = :id_destination");
    $enregistrement->bindParam(':titre', $titre, PDO::PARAM_STR);
    $enregistrement->bindParam(':img1', $img1, PDO::PARAM_STR);
    $enregistrement->bindParam(':img2', $img2, PDO::PARAM_STR);
    $enregistrement->bindParam(':img3', $img3, PDO::PARAM_STR);
    $enregistrement->bindParam(':description1', $description1, PDO::PARAM_STR);
    $enregistrement->bindParam(':description2', $description2, PDO::PARAM_STR);
    $enregistrement->bindParam(':map', $map, PDO::PARAM_STR);
    $enregistrement->bindParam(':id_destination', $id, PDO::PARAM_INT);
    $enregistrement->execute();
}

function get_modif() {
    global $pdo;
    $id = $_GET['id_destination'];
    $destination_modif = $pdo->prepare("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination AND d.id_destination = :id_destination");
    $destination_modif->bindParam(':id_destination', $id, PDO::PARAM_INT);
    $destination_modif->execute();
    return $destination_modif->fetch(PDO::FETCH_ASSOC);
}
