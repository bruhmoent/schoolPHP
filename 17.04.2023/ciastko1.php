<!DOCTYPE html>
<?php
$czas =  date("Y-m-d G:i:s");
setcookie("wizyta", $czas, time()+3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciasteczka</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['wizyta']))
    {
        $ostatnia = $_COOKIE['wizyta'];
        echo "Hii :333 The last time you visited us was: ".$ostatnia;
    }else{
        echo "Brother in law sees this for the first time this hour</br>";
    }
    ?>
</body>
</html>