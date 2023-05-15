<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goobas</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE['dane']) && !isset($_POST['nazw'])){
    ?>
    <form action="ciastko2.php" method="post">
        <p>Podaj imie i nazwisko: </p>
        <input type="text" name="nazw" value=" " size="35">
        <p><input type="submit" value="Wyslij" name="wyslij"></p>
    </form>
    <?php
    } else {
        if(isset($_POST['nazw']))
        {
            setcookie('dane', $_POST['nazw'],  time()+60*60*24*365);
            echo "<p> Thanks for inputting data :3 </p>";
        }else{
            echo "Hello hello, how are you doing on this day my ".$_COOKIE['dane']."🚚 </p>";
        }
    }
    ?>
</body>
</html>