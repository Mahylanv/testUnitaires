<?php
// Restriction d'accès

// Traitements PHP
include '../inc/init.inc.php'; // initialisation du site
include '../inc/fonctions.inc.php';
include '../controller/update_destination.php';

// début des affichages
include '../inc/header.inc.php';
include '../inc/nav.inc.php';

    // Récupération des catégorie pour construire les options du select
    $continent_destination = $pdo->query("SELECT * FROM continent_destination ORDER BY continent_destination");
    $destination = $continent_destination->fetchAll(PDO::FETCH_ASSOC);
    $options = '';
    foreach($destination AS $sous_tableau) {
        $options .= '<option value="' . $sous_tableau['id_continent'] . '">' . $sous_tableau['continent_destination'] . '</option>';
    }
    // echo '<pre>'; print_r($liste_destinations); echo '</pre>';
    

// echo '<pre>'; print_r($_SESSION); echo '</pre>';
?> 
 
<div>
    <h1>Gestions des destinations</h1>
</div>


<div>
    <div>
        <form class="ajout-form" method="post" enctype="multipart/form-data">
            <h3>Modification d'une destination</h3>
            <div>
                <input type="text" name="titre" id="titre" placeholder="Titre" value="<?php echo $modifie[0]['titre'] ?>">
            </div>
            <div>
                <input type="text" name="img1" id="img1" placeholder="Image principale" value="<?php echo $modifie[0]['img1'] ?>">
            </div>
            <div>
                <input type="text" name="img2" id="img2" placeholder="Image 2" value="<?php echo $modifie[0]['img2'] ?>">
            </div>
            <div>
                <input type="text" name="img3" id="img3" placeholder="Image 3" value="<?php echo $modifie[0]['img3'] ?>">
            </div>
            <div>
                <textarea name="description1" id="description1" placeholder="Description 1"  rows="6" value="<?php echo $modifie[0]['description1'] ?>"></textarea>
            </div>
            <div>
                <textarea name="description2" id="description2" placeholder="Description 2"  rows="6" value="<?php echo $modifie[0]['description2'] ?>"></textarea>
            </div>
            <div>
                <select name="id_continent" id="id_continent" class="form-select">
                    <option value="<?php echo $modifie[0]['continent_destination'] ?>" disabled selected>Continent</option>
                    <?php echo $options; ?>
                </select>
            </div>
            <div>
                <input type="text" name="map" id="map" placeholder="Localisation" value="<?php echo $modifie[0]['map'] ?>">
            </div>
            
            <button type="submit">Enregistrement</button>
        </form>
    </div>
</div>

<?php
include '../inc/footer.inc.php';