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
@ $wp = fopen("zamowienia.txt", 'r');
if(!$wp)
{
    echo "nnie ma zaowneian</body></html>";
    exit;
}
while(!feof($wp))
{
$zamowienia = fgets($wp, 999);
echo $zamowienia.'<\br>';
}
fclose($wp);
?>
</body>
</html>