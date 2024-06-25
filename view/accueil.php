<?php include '../inc/header.inc.php'; 
include '../inc/fonctions.inc.php';
include '../controller/destination.php';
include '../inc/nav.inc.php'; 
// print_r($liste_destinations)
?>

    <h1>Achetez-Vous La Liberté</h1>
    <p id="slogan">Imaluu vous propose de creer le voyage de vos reves en fonction de votre budget, vos préférences, vos dates... Découvrez de somptueuses destinations méconnues du grand publique avec de magnifiques paysages ou des hotels atypiques aux coins du globe. 
    N’attendez pas pour vous offrir la liberté en quelques cliques !</p>

        <h2 id="suggestionsTitre">Nos Suggestions</h2>
        <div class="card-area">
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $liste_destinations[1]['img1'] ?>" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="<?php echo $liste_destinations[2]['img1'] ?>" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $liste_destinations[2]['img1'] ?>" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $liste_destinations[5]['img1'] ?>" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
        </div>

        <div class="card-area" id="hide-card">
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <p>Hotels</p>
                    <h2>Maldivians islands, Asie</h2>
                    <button>En savoir plus</button>
                </div>
                <div class="flip-card-back">
                    <h2 style="position: absolute;"><?php echo $sous_tableau['titre'] ?></h2>
                    <p><?php echo $sous_tableau['description1'] ?></p> 
                    <img src="../assets/img/img5.jpg" alt="Avatar">
                    <button>En savoir plus</button>
                </div>
                </div>
            </div>
        </div>



            <div class="contenu">
                <div class="savoirplus">
                    <p class="changeText">Plus +</p>
                </div>

                <div class="photo">
                    <div class="diaporama">
                    <div class="diapo anim">
                        <img src="../assets/img/img1.jpg" />
                        <div class="description">London, England</div>
                    </div>
                    <div class="diapo anim">
                        <img src="../assets/img/img2.jpg" />
                        <div class="description">Sunset in Romania</div>
                    </div>
                    <div class="diapo anim">
                        <img src="../assets/img/img3.jpg" />
                        <div class="description">New York, USA</div>
                    </div>
                    <div class="diapo anim">
                        <img src="../assets/img/img4.jpg" />
                        <div class="description"> Sidney, Australie</div>
                    </div>
                    <div class="selector">
                        <a class="avant" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="apres" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div class="ref">
                        <span class="rond" onclick="currentSlide(1)"></span>
                        <span class="rond" onclick="currentSlide(2)"></span>
                        <span class="rond" onclick="currentSlide(3)"></span>
                        <span class="rond" onclick="currentSlide(4)"></span>
                    </div>
                    </div>
                </div>

                <div class="test">
                    <img src="../assets/img/qui.jpg" alt="" class="test_img">
                    <h2>Qui sommes nous ?</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab unde totam quam velit dicta mollitia reprehenderit molestiae quidem voluptatum neque a vero nesciunt, quisquam, earum commodi vitae, autem nemo eveniet?Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem molestias ratione officiis repellendus tempore unde asperiores, non expedita quod, accusamus quibusdam, itaque cum ullam. Incidunt quam doloremque ea deleniti veniam?Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    </p>
                </div>


            </div>



    <?php
    include '../inc/footer.inc.php';
    ?>