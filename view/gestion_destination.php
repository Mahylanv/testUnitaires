<?php
// Restriction d'accès

// Traitements PHP
include '../inc/init.inc.php'; // initialisation du site
include '../inc/fonctions.inc.php';
include '../controller/gestion_destination.php';

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
                    <h3>Ajout d'une destination</h3>
                    <div>
                        <input type="text" name="titre" id="titre" placeholder="Titre">
                    </div>
                    <div>
                        <input type="text" name="img1" id="img1" placeholder="Image principale">
                    </div>
                    <div>
                        <input type="text" name="img2" id="img2" placeholder="Image 2">
                    </div>
                    <div>
                        <input type="text" name="img3" id="img3" placeholder="Image 3">
                    </div>
                    <div>
                        <textarea name="description1" id="description1" placeholder="Description 1"  rows="6"></textarea>
                    </div>
                    <div>
                        <textarea name="description2" id="description2" placeholder="Description 2"  rows="6"></textarea>
                    </div>
                    <div>
                        <select name="id_continent" id="id_continent" class="form-select">
                            <option value="" disabled selected>Continent</option>
                            <?php echo $options; ?>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="map" id="map" placeholder="Localisation">
                    </div>
                    
                    <button type="submit">Ajouter</button>
                </form>
            </div>
        </div>
        <div>
            <div>
                <table class="gestion-table">
                    <tr>
                        <th>Titre</th>
                        <th>Description 1</th>
                        <th>Description 2</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Continent</th>
                        <th>Localisation</th>
                        <th>Action</th>
                    </tr>
                    <?php echo $tableau; ?>
                </table>
            </div>
        </div>
<?php
include '../inc/footer.inc.php';