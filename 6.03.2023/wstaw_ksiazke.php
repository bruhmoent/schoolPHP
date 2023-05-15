<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $isbn = trim($_POST['isbn']);
    $tytul = trim($_POST['tytul']);
    $autor = trim($_POST['autor']);
    $cena = trim($_POST['cena']);

    if(!$isbn || !$tytul || !$autor || !$cena)
    {
        echo "Missing parsed data. Please retry this operation.</body></html>";
        exit;
    }
     

    $isbn = addslashes(   $isbn );
    $tytul = addslashes($tytul);
    $autor = addslashes(   $autor);
    $cena = doubleval(   $cena );

@ $db= new mysqli('localhost', 'root', '', 'ksiazki');
if($db->connect_errno)
{
    echo "Cannot establish connection to database.</body></html>";
    exit;
}
echo "</br>";
$zapytanie = "insert into ksiazki value ('".$isbn."', '".$autor."', '".$tytul."', '".$cena."')";
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