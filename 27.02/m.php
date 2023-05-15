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
      require_once('argentinian.php');
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
    @ $wp=fopen("aplikacje.txt", 'a');
    if(!$wp)
    {
        echo "Nie mozna zapisac</body></html>";
        exit;
    }
    $data = date("H:i, jS F");
    $ciagwyjsciowy=$data."\t".$imie."\t".$nazwisko."\t".$email."\t".$telefon."\t". $wiek. "\t".$szkola_wyzsza."\t".$plec."\t".$miasto."\t".$zawod."\t".$hobby."\t".$opis."\t".$notyfikacje."\n";
    fwrite($wp, $ciagwyjsciowy);
    fclose($wp);       

    echo make_table();
    ?>
</body>
</html>