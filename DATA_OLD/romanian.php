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

    for($i = 0; $i < 100; $i++)
    {
        $tablica[$i] = rand(1,100);
        print($tablica[$i]." ");
    }

    sort($tablica);
    print("<br> sorted brah <br>");

    foreach ($tablica as $i)
        print($i);

    rsort($tablica);
    print("<br> DESC sorted brah <br>");

    foreach ($tablica as $i)
        print($i);

    print("<hr> sumka <br>");
    $suma = 0;

    foreach ($tablica as $i)
       $suma += $i;
       
    print("<br> sum wynsoi ".$suma."<br>");
    $srednia = $suma/sizeof($tablica);
    $sumaparz = 0;

    foreach ($tablica as $i)
    {
        if($i%2==0)
       $sumaparz += $i;
    }

    print("<br> sumparzs wynsoi ".$sumaparz);

    ?>
</body>
</html>