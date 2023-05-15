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
    $recenzja = trim($_POST['recenzja']);

    @$db = new mysqli('localhost', 'root', '', 'ksiazki');
    if($db->connect_errno)
    {
        echo "Cannot establish connection to database.</body></html>";
        exit;
    }

    $recenzja = addslashes(   $recenzja );

    echo "</br>";
    $zapytanie = "insert into recenzje_ksiazek value ('".$isbn."','".$recenzja."')";
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