<?php 
include '../inc/header.inc.php';
include '../inc/fonctions.inc.php';
include '../controller/destination_details.php';
include '../inc/nav.inc.php'; 
?>

<div>
    <?php 
if($_GET['id'] = $sous_tableau['id_destination']) { 
        echo $details;
        } else {
            echo 'ERREUR SORRY';
        } ?>
</div>

        
<?php
include '../inc/footer.inc.php';
?>