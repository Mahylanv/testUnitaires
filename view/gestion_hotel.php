<?php
// Restriction d'accès

// Traitements PHP
include '../inc/fonctions.inc.php';
include '../controller/gestion_hotel.php';

// début des affichages
include '../inc/header.inc.php';
include '../inc/nav.inc.php';
// echo '<pre>'; print_r($_SESSION); echo '</pre>';

?>


        <div>
            <h1>Gestions des hotels</h1>
        </div>


        <div>
            <div>
                <form class="ajout-form" method="post" enctype="multipart/form-data">
                    <h3>Ajout d'un hotel</h3>
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
                        <textarea name="description1" id="description1" placeholder="Description 1" rows="6"></textarea>
                    </div>
                    <div>
                        <textarea name="description2" id="description2" placeholder="Description 2" rows="6"></textarea>
                    </div>
                    <div>
                        <input type="text" name="map" id="map" placeholder="Localisation">
                    </div>
                    <button type="submit">Enregistrement</button>
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
                        <th>Localisation</th>
                        <th>Action</th>
                    </tr>
                    <?php echo $tableau; ?>
                </table>
            </div>
        </div>
<?php
include '../inc/footer.inc.php';