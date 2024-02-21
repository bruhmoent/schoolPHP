<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="baner">
        <h1> Hurtownia z najlepszymi cenami </h1>
    </section>

    <section id="container">
        <section id="lewy">
            <h2> Nasze ceny </h2>

            <table>
                <tbody>
                     <?php
        @ $db = new mysqli("localhost", "root", "", "sklep");

        $query = "SELECT nazwa, cena FROM `towary` WHERE 1 LIMIT 4;";
        $result = $db->query($query);

        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                echo " <tr>
                        <td>". $row['nazwa'] ."</td>
                        <td>". $row['cena'] ."</td>
                    </tr>";
            }
        }

        $result->free();
    ?>
                </tbody>
            </table>
        </section>
        <section id="srodkowy">
            <h2> Koszt zakupów </h2>
            <form method="post" action="index.php" id="koszyk">
                <label for="wybor">wybierz artykuł: </label>
                <select id="wybor" name="wybor">
                    <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                    <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                    <option value="Cyrkiel">Cyrkiel</option>
                    <option value="Linijka 30 cm">Linijka 30 cm</option>
                </select><br>

                <label for="sztuki">liczba sztuk: </label>
                <input type="number" name="sztuki" id="sztuki"/><br>
                <input type="submit" value="OBLICZ"/>
            </form>

            <?php
                if(isset($_POST['wybor']) && $_POST['sztuki'])
                {
                    $selected_val = $_POST['wybor'];
                    $sztuki = $_POST['sztuki'];

                 $query = 'SELECT cena FROM towary WHERE nazwa = "'.$selected_val.'";';
                 $result2 = $db->query($query);

                if($result2)
                {

                     while($row = $result2->fetch_assoc())
            {
                $final = $row['cena'] * $sztuki;
              
            }
              echo "<p>wartość zakupów:". $final. "</p>";
                $result2->free();
                }
                }
                
                $db->close();
            ?>
            
        </section>
        <section id="prawy">
            <h2>
                Kontakt
            </h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </section>
    </section>

    <section id="stopka">
        <h4>Witrynę wykonał: NUMER</h4>
    </section>
</body>
</html>