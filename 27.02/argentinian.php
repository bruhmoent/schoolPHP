<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            color:white;
        }
    body{
        background-color: black;
    }
    table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: 1px solid #ccc;
  font-family: Arial, sans-serif;
  font-size: 14px;
  overflow: hidden;
}

th {
  background-color: #f57c00;
  color: #fff;
  font-weight: bold;
  padding: 10px;
  text-align: left;
  text-transform: uppercase;
  border: 1px solid #f57c00;
}

td {
  border: 1px solid #eee;
  padding: 10px;
}


th:nth-child(4n-1),
th:nth-child(4n) {
  background-color: #e64a19;
  color: #fff;
}

th:nth-child(4n-1):hover,
th:nth-child(4n):hover {
  background-color: #ff7043;
  color: #fff;
}

th:hover {
  background-color: #fce4ec;
}

    </style>
</head>
</head>
<body>
    <?php
    function make_table(){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['surname'];
        $email = $_POST['email'];
        $telefon = $_POST['phone'];
        $wiek = $_POST['age'];
        $szkola_wyzsza = isset($_POST['field1']) ? $_POST['field1'] : "Nie";
        $plec = $_POST['gender'];
        $miasto = $_POST['city'];
        $zawod = $_POST['occupation'];
        $hobby = $_POST['hobbies'];
        $opis = $_POST['textarea'];
        $notyfikacje = isset($_POST['newsletter']) ? $_POST['newsletter'] : "Nie";

        $sumaAplikantowCount = 0;
        $sumaKomptentychAplikantowCount = 0;
        $sumaAplikantowZOpisemCount = 0;
        $sumaAplikantow = 0;
        $sumaKomptentychAplikantow = 0;
        $sumaAplikantowZOpisem = 0;

        $aplikacje = file("aplikacje.txt");
        $ilosc_aplikacji = count($aplikacje);
        if($ilosc_aplikacji == 0)
        {
            echo "Nie znaleziono aplikacji</body></html>";
            exit;
        }

  echo "<h1> Aplickaje </h1>";
  $ciagwyjsciowy= "<ul><br> <li> Imie: ".$imie."<br>"." <li> Nazwisko: ".$nazwisko."<br>"." <li> Email: ".$email."<br>"." <li> Telefon: ".$telefon."<br>". "<li> Wiek: ".$wiek. "<br>"." <li> Szkola wyzsza: ".$szkola_wyzsza."<br>"." <li> Płeć: ".$plec."<br>"." <li> Miasto: ".$miasto."<br>"." <li> Poprzedni zawod: ".$zawod."<br>". " <li> Hobby: ".$hobby."<br>". " <li> Opis: ".$opis."<br>". " <li> Czy otrzymuje powiadomienia?: ".$notyfikacje."</ul>";
  echo "<b>Ostanie przeslane dane: <b>".$ciagwyjsciowy."<br><br>";
  echo "<table>";
  echo "<tr>
  <th>Imię</th>
  <th>Nazwisko</th>
  <th>Email</th>
  <th>Telefon</th>
  <th>Wiek</th>
  <th>Ukończył szkołę wyższą</th>
  <th>Płeć</th>
  <th>Miasto</th>
  <th>Poprzedni zawód</th>
  <th>Hobby</th>
  <th>Opis</th>
  <th>Chce otrzymywać notyfikacje o przyjęciu</th>
  </th>";
  
 for($i=0; $i < sizeof($aplikacje); $i++)
  {
    $linia = explode("\t", $aplikacje[$i]);

    $sumaAplikantow = $linia[1];
    $sumaKomptentychAplikantow = $linia[6];
    $sumaAplikantowZOpisem = $linia[11];
    if(!empty($sumaAplikantow))
        $sumaAplikantowCount++;
    if(!empty($sumaKomptentychAplikantow && $sumaKomptentychAplikantow == "Tak"))
        $sumaKomptentychAplikantowCount++;
    if(!empty($sumaAplikantowZOpisem))
        $sumaAplikantowZOpisemCount++;
  }

  foreach($aplikacje as $aplikacje){
    $linia = explode("\t", $aplikacje);
    $imie = $linia[1];
    $nazwisko = $linia[2];
    $email = $linia[3];
    $telefon = $linia[4];
    $wiek = $linia[5];
    $szkola_wyzsza = $linia[6];
    $plec = $linia[7];
    $miasto = $linia[8];
    $zawod = $linia[9];
    $hobby = $linia[10];
    $opis = $linia[11];
    $notyfikacje = $linia[12];

  echo "<tr>";
  echo "<th>$imie</th>";
  echo "<th>$nazwisko</th>";
  echo "<th>$email</th>";
  echo "<th>$telefon</th>";
  echo "<th>$wiek</th>";
  echo "<th>$szkola_wyzsza</th>";
  echo "<th>$plec</th>";
  echo "<th>$miasto</th>";
  echo "<th>$zawod</th>";
  echo "<th>$hobby</th>";
  echo "<th>$opis</th>";
  echo "<th>$notyfikacje</th>";
  echo "</tr>";
  }

  echo "<tr>";
  echo "<th>Suma:</th>";
  echo "<th>$sumaAplikantowCount</th>";
  echo "<th>-</th>";
  echo "<th>-</th>";
  echo "<th>-</th>";
  echo "<th>(Ukonczona) $sumaKomptentychAplikantowCount</th>";
  echo "<th>-</th>";
  echo "<th>-</th>";
  echo "<th>-</th>";
  echo "<th>-</th>";
  echo "<th>-</th>";
  echo "<th>$sumaAplikantowZOpisemCount</th>";
  echo "</tr>";
  echo "</table>";
  
}

    ?>
</body>
</html>