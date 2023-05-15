<?php
session_start();
if(isset($_POST['iduzytkownika']) && isset($_POST['haslo']))
{
    $iduzytkownika = $_POST['iduzytkownika'];
    $haslo = $_POST['haslo'];
    @$bd_lacz = new mysqli('localhost', 'root', '', 'uwierz');
    if($bd_lacz->connect_errno!=0)
    {
        echo 'fail'.mysqli_connect_error();
        exit();
    }
    $zapytanie = "SELECT * FROM uwierzytelnieni_uzytkownicy WHERE uzytkownik = "."'".$iduzytkownika."'"." AND haslo = sha1("."'".$haslo."'".");";
    $wynik = $bd_lacz->query($zapytanie);
    if($wynik->num_rows > 0)
    {
        $_SESSION['prawid_uzyt'] = $iduzytkownika;
    }
    $bd_lacz->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <h1>Zaloguj</h1>
    <?php
    if(isset( $_SESSION['prawid_uzyt']))
    {
        echo 'Zalogowano jako: '. $_SESSION['prawid_uzyt']."<br/>";
        echo '<a href="wylog.php">Wyloguj</a><br/>';

    }else
    {
        if(isset($iduzytkownika))
        echo 'fail masz loga<br/>';
        else
        echo 'nie ma dos<br/>';
    
    ?>
    <form method="post" action="uwierz_glowny.php">
    <table>
    <tr><td>Identyfikator uzytkowanika</td>
    <td><input type="text" name="iduzytkownika"></td></tr>
    <tr><td>Haslo uzytkowanika</td>
    <td><input type="password" name="haslo"></td></tr>
    <tr><td colspan="2"><input type="submit" value="Logowanie"></td></tr>
</table>
</form>
<?php
}
?>
<a href="zalogowani.php"> Dla zalog </a>
</body>
</html>