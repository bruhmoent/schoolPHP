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

$waluta = $_POST['waluta'];
$typ = $_POST['typ'];
if (empty($typ)) {
    echo 'Please correct the fields</body></html>';
    return false;
}
$final = 0.0;
$exchange = 4.71;
if( $typ == "eu" )
$final = $waluta / $exchange;
else
$final = $waluta * $exchange;

echo "Otrzymana waluta to " .$final. ".";
?>
</body>
</html>