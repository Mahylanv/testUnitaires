<?php
require_once __DIR__ . '/../model/gestion_destination.php'; // Assurez-vous que le chemin est correct
// Le model : les requetes SQL

// récupération des catégories
function get_continent_destination() {
    global $pdo;
    $continent_destination = $pdo->query("SELECT * FROM continent_destination ORDER BY continent_destination");
    return $continent_destination->fetchAll(PDO::FETCH_ASSOC);
}

//enregistrement de la destination et de la relation destination <=> categorie
function create_post($titre, $img1, $img2, $img3, $description1, $description2, $id_continent, $map) {
    global $pdo;
    $enregistrement= $pdo->prepare("INSERT INTO destination (titre, img1, img2, img3, description1, description2, map) VALUES (:titre, :img1, :img2, :img3, :description1, :description2, :map )");
    $enregistrement->bindParam(':titre', $titre, PDO::PARAM_STR);
    $enregistrement->bindParam(':img1', $img1, PDO::PARAM_STR);
    $enregistrement->bindParam(':img2', $img2, PDO::PARAM_STR);
    $enregistrement->bindParam(':img3', $img3, PDO::PARAM_STR);
    $enregistrement->bindParam(':description1', $description1, PDO::PARAM_STR);
    $enregistrement->bindParam(':description2', $description2, PDO::PARAM_STR);
    $enregistrement->bindParam(':map', $map, PDO::PARAM_STR);
    $enregistrement->execute();

    // on récupere l'id_article qui vient d'etre crée
    $id_destination = $pdo->lastInsertId();

    $enregistrement_relation = $pdo->prepare("INSERT INTO relation_continent_destination (id_destination, id_continent) VALUES (:id_destination, :id_continent)");
    $enregistrement_relation->bindParam(':id_destination', $id_destination, PDO::PARAM_STR);
    $enregistrement_relation->bindParam(':id_continent', $id_continent, PDO::PARAM_STR);
    $enregistrement_relation->execute();
}

function get_destinations() {
    global $pdo;
    $liste_destinations = $pdo->query("SELECT d.id_destination, titre, img1, img2, img3, description1, description2, continent_destination, map FROM destination d, continent_destination c, relation_continent_destination r WHERE c.id_continent = r.id_continent AND d.id_destination = r.id_destination");
    return $liste_destinations->fetchAll(PDO::FETCH_ASSOC);
}


// Suppression d'un article
function delete_post($id_destination) {
    global $pdo;
    // Suppression de la relation dans la table relation_continent_destination
    $suppression_relation = $pdo->prepare("DELETE FROM relation_continent_destination WHERE id_destination = :id_destination");
    $suppression_relation->bindParam(':id_destination', $id_destination, PDO::PARAM_STR);
    $suppression_relation->execute();

    // Suppression de la destination
    $suppression = $pdo->prepare("DELETE FROM destination WHERE id_destination = :id_destination");
    $suppression->bindParam(':id_destination', $id_destination, PDO::PARAM_STR);
    $suppression->execute();
}