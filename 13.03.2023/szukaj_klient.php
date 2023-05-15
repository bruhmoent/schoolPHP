<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szukaj klienta</title>
</head>
<body>
    <?php
        $input1 = trim($_POST['input1']);
        $input2 = trim($_POST['input2']);

        if(!$input1 || !$input2)
        {
            echo "Missing parsed data. Please retry this operation.</body></html>";
            exit;
        }

    @$db = new mysqli('localhost', 'root', '', 'ksiazki');
    if($db->connect_errno)
    {
        echo "Cannot establish connection to database.</body></html>";
        exit;
    }

    $input1 = addslashes(   $input1 );
    $input2 = addslashes($input2);

    echo "</br>";
    $zapytanie = "select * from klienci where ".$input1." = "."'". $input2."'";
    echo $zapytanie;

    $wynik = $db->query($zapytanie);
    $found = $wynik->num_rows;
    echo '<p> znaz: '.$found.'</p>';

    for($i=0;$i<$found;$i++)
    {
        $wiersz = $wynik->fetch_assoc();
        echo '<p>'.($i+1).'. Nazwisko: ';
        echo $wiersz['nazwisko'];
        echo '<br>Adres: ';
        echo $wiersz['adres'];
        echo '<br>Miejscowosc: ';
        echo $wiersz['miejscowosc'];
        echo '</p>';
    }
    
    $wynik->free();
    $db->close();

    ?>
</body>
</html> 