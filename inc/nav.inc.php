<?php
include '../controller/account.php';
?>

<nav>
    <div class="logo">
    <img id="logo" src="../assets/img/logo.png" alt="zdzd">
    <a href="accueil.php"><p class="accueil">Accueil</p></a>
    <?php 
      if(user_is_admin()) { ?>
        <div class="nav-admin"><a href="gestion_destination.php">Gestion Destination</a> &nbsp; / &nbsp;<a href="gestion_hotel.php">Gestion Hotel</a></div>
      <?php }
    ?>
    </div>
    <div id="float">
        <a class="link" href="destination.php">Destination</a>
        <a class="link" href="hotel.php">Hotels</a>
        <a class="link" href="">Devis</a>
        <a class="link" href="">Nos experiences</a>
        <a class="link" href="">Les avis</a>  
        <svg class="profil-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
    </div>
</nav>


  <ul class="profil connect">
  <?php if( user_is_connected()) { ?>
  <div class="profil-title">
  <?php } else {?>
  <div class="flex profil-title"> 
    <li id="seconnecter">Se connecter</li>
    <li id="sInscrire">Créer un compte</li> 
  </div>

  <?php echo $message; 
  echo ("gerer message erreur")?>
  
  <div class="connexion">
    <form method="post">
      <div class="input">
        <input class="input__field" name="pseudo" id="pseudonyme" type="text" required />
        <label for="pseudo" class="input__label">Pseudo</label>
      </div>
      <div class="input">
        <input class="input__field" name="mdp" id="password" type="password" required />
        <label for="mdp" class="input__label">Mot de Passe</label>
        <span class="input__icon-wrapper">
          <i class="input__icon ri-eye-off-line"></i>
        </span>
      </div>
      <button type="submit">Connexion</button>
    </form>
  </div>

  <?php echo $msg; ?>
  <div class="inscription">
  <form method="post">
      <div class="input">
        <input class="input__field insciption_pseudo" name="pseudo" id="pseudo" type="text" required />
        <label for="pseudo" class="input__label">Pseudo</label>
        <div class="wrapper">
          <div class="content">
            <ul class="requirement-list">
              <li>
                <span>Au moins 3 caractères nécessaires</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="input">
        <input class="input__field" name="email" id="email" type="text" required />
        <label for="email" class="input__label">Email</label>
      </div>
      <div class="input">
        <input class="input__field" name="mdp" id="mdp" type="password" required />
        <label for="mdp" class="input__label">Mot de Passe</label>
        <span class="input__icon-wrapper">
          <i class="input__icon ri-eye-off-line"></i>
        </span>
      </div>

      <div class="container">
        <div class="input_field captch_box">
          <input type="text" value="" disabled />
          <button class="refresh_button">
            <i class="fa-solid fa-rotate-right"></i>
          </button>
        </div>
        <div class="input_field captch_input">
          <input type="text" placeholder="Entrer le captcha"/>
        </div>
        <div class="message">Entered captcha is correct</div>
        <div class="input_field button disabled">
          <button type="submit" value="">Inscription</button>
        </div>
      </div>
    </form>
  </div>
  <iconify-icon icon="material-symbols:close" id="close"></p>
  <iconify-icon icon="mdi:home"></iconify-icon>
  <?php }




  if (user_is_connected()) {
    ?> 
    <li id="name_account">Bonjour <?php echo $_SESSION['user']['pseudo']; ?></li>
    <li><a href="profil.php">Mon compte</a></li>
    <li><a href="#">Mes favoris</a></li>
    <li><a href="#">Mes avis</a></li>
    <li><a href="profil.php?action=deconnexion" onclick="return(confirm(' êtes vous sûr ?'))">Deconnexion</a></li>
    <li><a id="rouge" href="accueil.php?action=quitter&id_user=<?php echo $_SESSION['user']['id_user'];?>" onclick="return(confirm(' êtes vous sûr ?'))">Supprimer mon compte</a></li>
    <?php } ?>

</ul>


<body>
