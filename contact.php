<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>

  <body>

    <header class="header">
     <a href="index.php" class="logo"><span class="yellow">DM</span>clothing</a>

     <nav class="navbar">
        <a href="homme.html">HOMME</a>
        <a href="femme.html">FEMME</a>
        <a href="femme.homme.accessoires.chaussures.html">NOUVEAUTES</a>
        <form class="formserch" action="" method="post">
          <input class="inputserch" type="search" placeholder="RECHERCHE..." >
        </form>
        <a href="contact.php" class="btn">CONTACT</a>
        <a href="compte.php" class="btn">CONNEXION</a>
        <a href="ins.php" class="btn">INSCRIPTION</a>
        <a href="" class="btn">PANIER</a>

      </nav>


      <div class="hamburger">
        <img src="./images/grid-outline.svg" alt="" />
      </div>
    </header>


    <div class="promobar">
      <a class="rouge" href="femme.homme.accessoires.chaussures.html">Promos</a>
      <a href="homme.femme.html" class="btn">Vetements</a>
      <a href="chaussures.html" class="btn">Chaussures</a>
      <a href="accessoires.html" class="btn">Accessoires</a>
    </div>

    
    
    
    <form  class="form1" action=""method="post"><h1 align="center">Contactez-nous!</h1>
    <div class="nom1"><input type="text"name="nom"placeholder="nom"></div>

    <div class="nom1"><input type="text" name="prenom" placeholder="prenom"></div>
    
    <div class="nom1"><input type="email"name="email"placeholder="adresse mail"></div>
    
    <div class="nom1"><textarea name="message" id="message"  rows="10"placeholder="message"></textarea></div>
    
    <div class="envoye"><input type="submit"placeholder="envoyé"></div>
    

  </div>
  </form>
  <footer class="footer">
    <div class="top">
      <div class="content">
        <a href="" class="logo"><span class="yellow">DM</span>clothing</a>
        <p>
          Site de vente de vêtements en prêt-à-porter en ligne. <br>
          Rapport qualité-prix défiant toute concurrence. 
        </p>
      </div>

      <div class="links">
        <div class="link">
          <h4>Informations</h4>
          <div>
            <img src="" alt="" />
            <span>12 rue de paix Paris 75012</span>
          </div>
          <div>
            <img src="" alt="" />
            <span>DM@gmail.com</span>
          </div>
        </div>

        <div class="link">
          <h4>Liens</h4>
          <a href="homme.html">Homme</a>
          <a href="femme.html">Femme</a>
          <a href="homme.femme.html">Nouveautes Us</a>
          <a href="contact.php">Contact</a>
        </div>

        <div class="link">
          <h4>Ressources </h4>
          <a href="mentionlégal.html">Montions legales</a>
          <a href="#">Politique de confidentialite</a>
          <a href="cd.html">Condition d'utilisation</a>
          <a href="#">FAQ</a>
          <a href="#">Cookies</a>
        </div>

        <div class="link">
          <h4>Retrouvez nous sur</h4>
          <div>
            <img src=""alt="" />
            <span>Instagram</span>
          </div>
          <div>
            <img src="" alt="" />
            <span>Twitter</span>
          </div>
          <div>
            <img src="" alt="" />
            <span>Facebook</span>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <p>Copyright © 2022-2023 Massinissa tous les droit reserves .</p>
    </div>
  </footer>


  <div class="scroll-top">
    <img src="./images/jakob-owens-JzJSybPFb3s-unsplash 1.png" alt="" />
  </div>
  <!-- <script src="js/jquery.js"></script> -->
  <script src="js/app.js"></script>
</body>

</html> 
<?php
if(!empty($_POST)){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Créer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
 die("La connexion a échoué: " . mysqli_connect_error());
}


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["email"];
$message = $_POST["message"];



$sql = "INSERT INTO infocontact (nom, prenom, mail, message)
VALUES ( '$nom', '$prenom', '$mail', '$message')";

if (mysqli_query($conn, $sql)) {
 echo '<div class="message">votre message est envoyé avec succés!</div>';
} else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
  

   