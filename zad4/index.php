<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytówki</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section id="baner">
        <h1> Wizytówki pracownikow </h1>
        <form action="index.php" method="post">
        <input type="number" name="pracownik" value="1" min="1" max="9" required/>
        <input type="submit" value="WYSWIETL" id="button"/>
        </form>
    </section>
    <?php
    $pracownik = $_POST['pracownik'];
    @$db = new mysqli("localhost", "root", "", "firma");
    if($db -> connect_errno)
    {
        echo "Database connection error </body></html>";
        exit;
    }
    $zapytanie1 = "SELECT id,imie,nazwisko,adres,miasto FROM `pracownicy` WHERE id = $pracownik;";
    $wynik = $db->query($zapytanie1);
    $found = $wynik->num_rows;

    $wiersz = $wynik->fetch_assoc();
    
     echo "<section id=".'"'."wizytowka".'"'.">";
     echo "<img src=".'"'.$wiersz['id'].".jpg".'"'."alt = ".'"'."pracownik".'"'." id="."wizImg".">";
     echo "<h2>".$wiersz['imie']." ".$wiersz['nazwisko']."</h2>";
     echo "<h4>"."Adres:"."</h4>";
     echo "<h4>".$wiersz['adres'].', '.$wiersz['miasto']."</h4>";
     echo "</section>";

     $wynik->free();
     $db -> close();
    ?>
    <footer>
    <section id="stopa1">
    <img src="obraz.jpg" alt="pracownicy firmy"></img>
    </section>
    <section id="stopa2">
    <p>Autorem wizytownika jest: Jeremy</p>
    <a href="http://agencjareklamowa543.pl" target="_blank">Zobacz nasze realizacje</a>
    </section>
    <?php
    $pracownik = $_POST['pracownik'];
    @$db = new mysqli("localhost", "root", "", "firma");
    if($db -> connect_errno)
    {
        echo "Database connection error </body></html>";
        exit;
    }
    $zapytanie2 = "SELECT imie,nazwisko FROM `pracownicy` WHERE czyRODO = 0;";
    $wynik = $db->query($zapytanie2);
    $found = $wynik->num_rows;

    echo "<section id=".'"'."stopa3".'"'.">";
    echo "<p>Osoby proszone o podpisanie dokumentu RODO:</p>";
    echo "<ol id=".'"'."listaRODO".'"'.">";
    for($i = 0; $i < $found; $i++)
    {
        $wiersz = $wynik->fetch_assoc();
        echo "<li>".$wiersz['imie']." ".$wiersz['nazwisko']."</li>";
    }

    echo "</ol>";
    echo "</section>";
    $wynik->free();
    $db -> close();
    ?>
</footer>
</body>
</html>