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
    $isbn= $_POST['isbn'];

    if(  !$isbn )
    {
        echo "brak parametrow</body></html>";
        exit;
    }

    @ $db=new mysqli('localhost', 'root', '', 'ksiazki');
    if($db->connect_errno){
        echo 'Cannot connect to database';
        exit;
    }

    $zapytanie = "select * from recenzje_ksiazek where isbn = ".$isbn;

    echo  $zapytanie;

    $wynik = $db->query($zapytanie);
    $found = $wynik->num_rows;
    echo '<p> znaz: '.$found.'</p>';

    for($i=0;$i<$found;$i++)
    {
        $wiersz = $wynik->fetch_assoc();
        echo '<p>'.($i+1).'. isbn: ';
        echo $wiersz['isbn'];
        echo '<br>recenzja: ';
        echo $wiersz['recenzja'];
        echo '</p>';
    }
    $wynik->free();
    $db->close();
    ?>
</body>
</html>