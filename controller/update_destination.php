<?php
include_once __DIR__ . '/../inc/init.inc.php';

function update_destination($id, $titre, $img1, $img2, $img3, $description1, $description2, $id_continent, $map) {
    global $pdo;
    $update = $pdo->prepare("UPDATE destination SET titre = :titre, img1 = :img1, img2 = :img2, img3 = :img3, description1 = :description1, description2 = :description2, map = :map WHERE id_destination = :id_destination");
    $update->bindParam(':titre', $titre, PDO::PARAM_STR);
    $update->bindParam(':img1', $img1, PDO::PARAM_STR);
    $update->bindParam(':img2', $img2, PDO::PARAM_STR);
    $update->bindParam(':img3', $img3, PDO::PARAM_STR);
    $update->bindParam(':description1', $description1, PDO::PARAM_STR);
    $update->bindParam(':description2', $description2, PDO::PARAM_STR);
    $update->bindParam(':map', $map, PDO::PARAM_STR);
    $update->bindParam(':id_destination', $id, PDO::PARAM_INT);
    $update->execute();

    $update_relation = $pdo->prepare("UPDATE relation_continent_destination SET id_continent = :id_continent WHERE id_destination = :id_destination");
    $update_relation->bindParam(':id_destination', $id, PDO::PARAM_INT);
    $update_relation->bindParam(':id_continent', $id_continent, PDO::PARAM_INT);
    $update_relation->execute();
}

function get_modif() {
    global $pdo;
    $id = $_GET['id_destination'];
    $result = $pdo->prepare("SELECT d.*, r.id_continent FROM destination d JOIN relation_continent_destination r ON d.id_destination = r.id_destination WHERE d.id_destination = :id_destination");
    $result->bindParam(':id_destination', $id, PDO::PARAM_INT);
    $result->execute();
    return $result->fetch(PDO::FETCH_ASSOC);
}
