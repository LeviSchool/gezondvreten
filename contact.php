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
   <div class="verticalLine"></div><br/>
   <!--Header-->
   <header class="bg-primary text-dark">
    <div class="container text-center text-dark">
      <h1 class="text-secondary">Contactformulier</h1>
      <p class="lead text-secondary">Uw vragen zijn altijd welkom.</p>
    </div>
  </header>
   <!--Form-->
   <div class="container">
   <form action="verwerk.php" method="post">
    <div class="form-group"><br/>
      <h2 class="text-center">Email</h2><br/>
      <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
    </div>
    <div class="form-group">
      <h2 class="text-center">Vul hier uw vraag/vragen in.  </h2><br/>
      <textarea class="form-control" name="vraag" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Is alles correct ingevuld?</label>
      </div><br/>
      <button type="submit" class="btn btn-primary" name="submit">Verstuur</button>
  </form>
  </div>
  <br><br>
  <div class="footer" style="height: 120px; background-color: #a6a6a6; width: 100%; color: #fff;">
    <p style="text-align: center; padding: 45px 0;">Copyright © DenkTank 2021</p>
  </div>
  </body>
  </html>