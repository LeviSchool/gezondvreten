<?php 

if (isset($_POST['login_submit'])) {

    // Database connectie

    require_once 'config.php';
    // Posts ophalen
    $username = htmlentities($_POST["name"], ENT_QUOTES);
    $password = htmlentities($_POST["password"], ENT_QUOTES);
    // Checken of de username en password zijn ingevuld
    if (strlen($username) > 0 && strlen($password) > 0) {

        // User selecteren en checken of het bestaat
        $query = "SELECT * FROM extralogin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $row['userLevel'];
            header("Location:Denktank.php");
        } else {
            echo "Er is geen gebruiker gevonden<br>";
            echo "<a href='login.php'>Terug gaan</a><br>";
            exit;
        }
    } else {
        echo "Niet alles is ingevuld<br>";
        echo "<a href='login.php'>Terug gaan</a><br>";
        exit;
    }
    
} else {
    echo "Er is niet op de submit knop gedrukt<br>";
    echo "<a href='login.php'>Terug gaan</a><br>";
    exit;
}



?>