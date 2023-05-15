<!DOCTYPE html>
<?php
    if(!isset($_COOKIE['ile'])){
        setcookie('ile', 0, time() + 120*24*365);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licznik</title>
</head>
<body>
    <?php
    }else
    {
        $buffer = $_COOKIE['ile'] += 1;
        setcookie('ile', $buffer, time() +  120*24*3655);
        echo "burger king: ".$buffer;
    }
    ?>
</body>
</html>