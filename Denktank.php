<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Denktank</title>
 <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
 <link href="css/scrolling-nav.css" rel="stylesheet">
 <link href="css/full-width-pics.css" rel="stylesheet">
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </head>
  <body>
    <?php 
    
    session_start();
    
    ?>
     <!--background -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-dark" href="Denktank.php">Denktank Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <!--Redirect buttons  -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-dark" href="contact.php">Contact</a>
            </li>
            <?php 
            
            if (isset($_SESSION['username'])) { 
              // Toon uitlog knop
              ?>
               <li class="nav-item">
               <a class="nav-link js-scroll-trigger text-dark" href="logout.php">Uitloggen</a>
            </li>
              <?php
            } else {
              // Toon inlog knop
              ?>
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger text-dark" href="login.php">Login</a>
            </li>
              <?php
            }
            
            ?>
            
          </ul>
        </div>
      </div>
    </div>
    </nav>
    <div class="verticalLine"></div>
     <!--info -->
    <header class="bg-primary text-dark">
      <div class="container text-center">
        <h1 class="text-secondary">Welkom op de Denktank website!</h1>
        <p class="lead text-secondary">Neem gerust een lekker kijkje.</p>
      </div>
    </header>  
     <!--Over -->
  <section id="Over">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
        <?php 
            
            if (isset($_SESSION['username'])) { 
              echo "<h2>Welkom, " . $_SESSION['username'] . "!</h2>";
            }
            ?>
          <h2 class="text-center">Waarom gezond eten goedkoper moet</h2><br/>
          <img src="img/mh.jpg"class="img-fluid" alt="Gezond">
          <p class="lead text-center"><br/>Gezonder eten en drinken is in de afgelopen 10 jaar meer in prijs gestegen dan ongezondere producten. Dat blijkt uit nieuwe cijfers van het CBS. Zorgelijk, vindt het Voedingscentrum. Want veel Nederlanders hebben baat bij gezonder eten. Om de gezonde keuze makkelijk te maken, vinden wij dat gezonde voeding juist minder in prijs moet stijgen. Prijsmaatregelen kunnen daarbij helpen, zoals een suikertaks.</p>
          <br/></div>
      </div>
      <div class="verticalLine"></div><br/>
    </div>
  </section>
   <!--info cards -->
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
       <img src="img/download.jfif" class="card-img-top" alt="Gezond">
        <div class="card-body">
         <h5 class="card-title">Het eten van fruit:</h5>
         <p class="card-text">Fruit levert weinig calorieën en veel voedingsstoffen. Fruit is goed voor de gezondheid en hangt samen met een lager risico op hart- en vaatziekten. Daarnaast hangt het eten van fruit samen met een lager risico op diabetes type 2, darmkanker en longkanker.</p>
         <a href="https://www.voedingscentrum.nl/encyclopedie/fruit.aspx%20,#:~:text=Fruit%20levert%20weinig%20calorie%C3%ABn%20en,type%202%2C%20darmkanker%20en%20longkanker." class="btn btn-primary">Meer info</a>
       </div>
      </div>
    </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
         <img src="img/groenties.jpg" class="card-img-top" alt="Gezond">
          <div class="card-body">
           <h5 class="card-title">Het eten van groente:</h5>
           <p class="card-text">Groenten zijn een belangrijke leverancier van voedingsvezels, vitaminen en mineralen. Onderzoek toont aan dat groenten een positief effect hebben op je gezondheid. Ze verlagen de bloeddruk en de LDL-cholesterol (door oplosbare vezels zoals pectine en inuline). Zo beschermen ze tegen hart- en vaatziekten.
          </p>
           <a href="https://www.gezondleven.be/themas/voeding/voedingsdriehoek/groenten#:~:text=Groenten%20zijn%20een%20belangrijke%20leverancier,ze%20tegen%20hart%2D%20en%20vaatziekten." class="btn btn-primary">Meer info</a>
         </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
         <img src="img/gezond.jpg" class="card-img-top" alt="Gezond">
          <div class="card-body">
           <h5 class="card-title">Waarom gezond eten goedkoper moet:</h5>
           <p class="card-text">Er bestaan verschillende onderzoeken waaruit blijkt dat gezonde producten goedkoper maken kan helpen om gezonder eten te stimuleren. Vooral in combinatie met een prijsverhoging op ongezondere producten, zoals een belasting op suikerhoudende dranken.</p>
           <a href="https://www.voedingscentrum.nl/nl/nieuws/maak-gezonder-eten-goedkoper.aspx#:~:text=Er%20bestaan%20verschillende%20onderzoeken%20waaruit,een%20belasting%20op%20suikerhoudende%20dranken." class="btn btn-primary">Meer info</a>
      </div>
  </div>
</div>
</div>
<br><br>
<?php
if (isset($_SESSION['username'])) { 
  ?>
  <iframe src="https://docs.google.com/document/d/e/2PACX-1vTzv6BfozwLiotjo6gPIT3Z6s4BikihOXLJKrJ6eW_eLv1awxwaFn-fKFNZmYUN1xR2NMEeS4fmQCDF/pub?embedded=true" style="height: 70vh; width: 90%;"></iframe>
    <?php 
}
?>
</div><br>
            <br>
  <div class="footer" style="height: 120px; background-color: #a6a6a6; width: 100%; color: #fff;">
    <p style="text-align: center; padding: 45px 0;">Copyright © DenkTank 2021</p>
  </div>
</body>
</html>