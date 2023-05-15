<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dla zalogowanych</title>
</head>
<body>
    <h1> Klub na zalogow</h1>
<?php
if(isset($_SESSION['prawid_uzyt']))
{
    echo "<p> zalog jest: ".$_SESSION['prawid_uzyt'].'</p';
    echo "Content dla zalogow:";
}
else{
    echo "Noob, nie jestes zalogiem............................";
}
?>
</body>
</html>