<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj klienta</title>
</head>
<body>
    <?php
        $isbn = trim($_POST['isbn']);
        $nazwisko = trim($_POST['nazwisko']);
        $adres = trim($_POST['adres']);
        $miejscowosc = trim($_POST['miejscowosc']);

    @$db = new mysqli('localhost', 'root', '', 'ksiazki');
    if($db->connect_errno)
    {
        echo "Cannot establish connection to database.</body></html>";
        exit;
    }

    $nazwisko = addslashes(   $nazwisko );
    $adres = addslashes($adres);
    $miejscowosc = addslashes(   $miejscowosc);

    echo "</br>";
    $zapytanie = "insert into klienci value ('".$isbn."','".$nazwisko."', '".$adres."', '".$miejscowosc."')";
    echo $zapytanie;
    $wynik = $db->query($zapytanie);
    echo "</br>";
    if($wynik)
    echo $db->affected_rows." saved to database.";
    else
    echo "Couldn't save input to database.";

    $db->close();

    ?>
</body>
</html>