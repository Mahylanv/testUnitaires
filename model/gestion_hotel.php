<?php
include '../inc/init.inc.php'; // initialisation du site

// Le model : les requetes SQL

// récupération des catégories
// function get_categories() {
//     global $pdo;
//     $liste_categories = $pdo->query("SELECT * FROM categorie ORDER BY nom_categorie");
//     return $liste_categories->fetchAll(PDO::FETCH_ASSOC);
// }

//enregistrement de la hotel et de la relation hotel <=> categorie
function create_post($titre, $img1, $img2, $img3, $description1, $description2, $map) {
    global $pdo;
    $enregistrement= $pdo->prepare("INSERT INTO hotel (titre, img1, img2, img3, description1, description2, map) VALUES (:titre, :img1, :img2, :img3, :description1, :description2, :map )");
    $enregistrement->bindParam(':titre', $titre, PDO::PARAM_STR);
    $enregistrement->bindParam(':img1', $img1, PDO::PARAM_STR);
    $enregistrement->bindParam(':img2', $img2, PDO::PARAM_STR);
    $enregistrement->bindParam(':img3', $img3, PDO::PARAM_STR);
    $enregistrement->bindParam(':description1', $description1, PDO::PARAM_STR);
    $enregistrement->bindParam(':description2', $description2, PDO::PARAM_STR);
    $enregistrement->bindParam(':map', $map, PDO::PARAM_STR);
    $enregistrement->execute();

    // on récupere l'id_article qui vient d'etre crée
    // $id_article = $pdo->lastInsertId();

    // $enregistrement_relation = $pdo->prepare("INSERT INTO relation_article_categorie (id_article, id_categorie) VALUES (:id_article, :id_categorie)");
    // $enregistrement_relation->bindParam(':id_article', $id_article, PDO::PARAM_STR);
    // $enregistrement_relation->bindParam(':id_categorie', $id_categorie, PDO::PARAM_STR);
    // $enregistrement_relation->execute();
}

// Recuperation des hotels pour affichage dans un tableau html
function get_hotels() {
    global $pdo;
    $liste_hotels = $pdo->query("SELECT id_hotel, titre, img1, img2, img3, description1, description2, map FROM hotel");

    return $liste_hotels->fetchAll(PDO::FETCH_ASSOC);
}

// Suppression d'un article
function delete_post($id_hotel) {
    global $pdo;
    $suppression = $pdo->prepare("DELETE FROM hotel WHERE id_hotel = :id_hotel");
    $suppression->bindParam(':id_hotel', $id_hotel, PDO::PARAM_STR);
    $suppression->execute();
}