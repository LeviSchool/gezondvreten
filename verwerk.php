<?php



if (isset($_POST['submit'])) { 

    $email = htmlentities($_POST["email"], ENT_QUOTES);
    $vraag = htmlentities($_POST["vraag"], ENT_QUOTES);

    $mailTo = 'ruddypink019@zueastergq.com';
    $headers = "From: Denk Tank";
    $onderwerp = "Vraag";
    $message = $vraag;

    mail($mailTo, $onderwerp, $message, $headers);

    echo "U mail is verzonden!<br>";
    echo "<a href='Denktank.php'>Terug gaan</a><br>";

} else {
    // niet op knop gedrukt
    echo "U heeft niet op de knop gedrukt";
}



?>