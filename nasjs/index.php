<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiagarnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <h1> Ksiegarnia </h1>
    </section>
<section id="content">

    <?php
    @ $db = new mysqli("localhost", "root", "", "ksiegarnia");
    if($db->connect_error)
    {
        die("Znaleziono problem: ".$db->connect_error);
        exit;
    }

    echo ' <table class="table">
    <thead>
    <tr>
        <th>Imie klienta</th>
        <th>Nazwisko klienta</th>
        <th>Nazwisko autora ksiazki</th>
        <th>Imie autora ksiazki</th>
    </tr>
</thead>
<tbody>';
    $query = "SELECT klienci.imie, klienci.nazwisko, ksiazki.nazwiskoautora, ksiazki.imieautora  FROM zamowienia INNER JOIN ksiazki ON zamowienia.idksiazki = ksiazki.idksiazki INNER JOIN klienci ON zamowienia.idklienta = klienci.idklienta;";
    $result = $db->query($query);

    if($result)
    {

    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>";
        echo $row['imie'];
        echo "</td>";
        echo "<td>";
        echo $row['nazwisko'];
        echo "</td>";
        echo "<td>";
        echo $row['nazwiskoautora'];
        echo "</td>";
        echo "<td>";
        echo $row['imieautora'];
        echo "</td>";
        echo "</tr>";
    }

    echo '</tbody></table>';
    }
    else
    {
        echo `Problem z wynikiem.`;
    }
    ?>

<br>
<section id="form-cont">
<form action="index.php" method="post" class="form">
    <h2> Dodaj klienta </h2>
    <label for="imiek"> Imie klienta </label>
    <input type="text" id="imiek" name="imiek"/><br>
    <label for="nazwk"> Nazwisko klienta</label>
    <input type="text" id="nazwk" name="nazwk"/><br>
    <label for="miejscowosc"> Miejscowosc </label>
    <input type="text" id="miejscowosc" name="miejscowosc"/><br>
    <input type="submit" value="Dodaj"/>
    </form>

<?php
    $bool = false;
    $query = "";
    if(isset($_POST["imiek"]) && isset($_POST["nazwk"]) && isset($_POST["miejscowosc"]))
    {
        $imiek = $_POST["imiek"];
        $nazwk = $_POST["nazwk"];
        $miejscowosc = $_POST["miejscowosc"];

        $queryb = "SELECT klienci.imie, klienci.nazwisko FROM klienci WHERE 1;";
        $result = $db->query($queryb);
        
        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                if($imiek == $row["imie"] && $nazwk == $row["nazwisko"])
                    $bool = true;
            }
        }

        if($bool == false)
        {
            $query = "INSERT INTO klienci (imie, nazwisko, miejscowosc) VALUES (". '"' .$imiek. '"' . "," . '"' .$nazwk. '"' . "," . '"' .$miejscowosc. '"'.");";
            $db->query($query);
        }
        else
        {
            echo '<p class="error">Taka osoba juz istnieje.<br></br></p>';
        }

        $result->free();
    }
?>

<form action="index.php" method="post" class="form">
    <h2> Dodaj zamowienie </h2>
    <label for="imiek"> Imie klienta </label>
    <input type="text" id="imiek" name="imiek"/><br>
    <label for="nazwk"> Nazwisko klienta</label>
    <input type="text" id="nazwk" name="nazwk"/><br>
    <label for="tytul"> Tytul </label>
    <input type="text" id="tytul" name="tytul"/><br>
    <label for="data"> Data </label>
    <input type="text" id="data" name="data"/><br>
    <label for="status"> Status </label>
    <input type="text" id="status" name="status"/><br>
    <input type="submit" value="Dodaj"/>
    </form>

    <?php

if (isset($_POST["imiek"]) && isset($_POST["nazwk"]) && isset($_POST["tytul"]) && isset($_POST["data"]) && isset($_POST["status"])) {
    $imiek = $_POST["imiek"];
    $nazwk = $_POST["nazwk"];
    $tytul = $_POST["tytul"];
    $data = $_POST["data"];
    $status = $_POST["status"];

    $queryb = "SELECT idklienta FROM klienci WHERE imie = '$imiek' AND nazwisko = '$nazwk';";
    $result = $db->query($queryb);
    
    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row['idklienta'];
        } else {
            echo "<p class='error'>Nie znaleziono klienta o podanym imieniu i nazwisku.</p>";
            $db->close();
            exit;
        }
    } else {
        echo "<p class='error'>Błąd w zapytaniu: " . $db->error . "</p>";
        $db->close();
        exit;
    }

    $queryc = "SELECT idksiazki FROM ksiazki WHERE tytul = '$tytul';";
    $resultb = $db->query($queryc);
    
    if ($resultb) {
        if ($resultb->num_rows > 0) {
            $rowb = $resultb->fetch_assoc();
            $idk = $rowb['idksiazki'];
        } else {
            echo "<p class='error'>Nie znaleziono książki o podanym tytule.</p>";
            $db->close();
            exit;
        }
    } else {
        echo "<p class='error'>Błąd w zapytaniu: " . $db->error . "</p>";
        $db->close();
        exit;
    }

    $queryd = "INSERT INTO zamowienia (idklienta, idksiazki, data, status) VALUES ($id, $idk, '$data', '$status')";
    $resultd = $db->query($queryd);

    if ($resultd) {
        echo "<p class='error'>Rekord dodany pomyślnie.</p>";
    } else {
        echo "<p class='error'>Błąd przy dodawaniu rekordu: " . $db->error . "</p>";
    }

    $result->free();
    $resultb->free();
    $db->close();
}

    ?>
    </section>

    </section>

    </section>
</body>
</html>