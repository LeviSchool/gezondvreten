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
        <h1 class="text-secondary">Inloggen</h1>
      </div>
    </header>  
     <!--Over -->
  <section id="Over">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <br><br><br><br>
          <form action="login_verwerk.php" method="post">
            Naam: <input type="text" name="name" required><br>
            Wachtwoord: <input type="password" name="password" required><br>
            <input type="submit" name="login_submit" value="Inloggen"><br><br>
          </form>
      </div>
      <div class="verticalLine"></div><br/>
    </div>
  </section>
</div><br><br><br><br><br>
  <div class="footer" style="height: 120px; background-color: #a6a6a6; width: 100%; color: #fff;">
    <p style="text-align: center; padding: 45px 0;">Copyright © DenkTank 2021</p>
  </div>
</body>
</html>