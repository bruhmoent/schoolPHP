<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Wyniki wyszukawania w ksiegarni: </h1>
    <hr></br></br>
    <?php
    $metoda_szukania= $_POST['metoda_szukanie'];
    $wyrazenie= $_POST['wyr'];
    $wyrazenie=trim($wyrazenie);

    if(  !$metoda_szukania || !$wyrazenie)
    {
        echo "brak parametrow</body></html>";
        exit;
    }

    @ $db=new mysqli('localhost', 'root', '', 'ksiazki');
    if($db->connect_errno){
        echo 'Cannot connect to database';
        exit;
    }

    $zapytanie = "select * from ksiazki where ".$metoda_szukania." like '%".$wyrazenie."%'";

    echo  $zapytanie;

    $wynik = $db->query($zapytanie);
    $found = $wynik->num_rows;
    echo '<p> znaz: '.$found.'</p>';

    for($i=0;$i<$found;$i++)
    {
        $wiersz = $wynik->fetch_assoc();
        echo '<p>'.($i+1).'. Tytuł: ';
        echo $wiersz['tytul'];
        echo '<br>Autor: ';
        echo $wiersz['autor'];
        echo '<br>isbn: ';
        echo $wiersz['isbn'];
        echo '<br>cena  : ';
        echo $wiersz['cena'];
        echo "<form method='post' action='test.php.'>";
        echo "<input type='submit' value='Dodaj recenzje'/>";
        echo "<input type='hidden' name='isbn' value="."'".$wiersz['isbn']."'"."\>";
        echo "</form>";
        echo "<form method='post' action='show.php.'>";
        echo "<input type='hidden' name='isbn' value="."'".$wiersz['isbn']."'"."\>";
        echo "<input type='submit' value='Wyswietl recenzje'/>";
        echo "</form>";
        echo '</p>';
    }
    $wynik->free();
    $db->close();
    ?>
</body>
</html>