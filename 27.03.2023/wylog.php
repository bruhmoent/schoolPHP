<?php
session_start();
$stary = $_SESSION['prawid_uzyt'];
unset( $_SESSION['prawid_uzyt']);
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyloguj</title>
</head>
<body>
    <h1> Wyloguj </h1>
    <?php
    if(!empty($stary)) 
        echo 'Wylogowano<br>/';
        else 
        echo "Nie zalogowany, nie dalo sie wylog";
    ?>
    <a href="uwierz_glowny.php"> Wroc </a>
</body>
</html>