<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $zamowienia = file("zamowienia.txt");
    $ilosc_zamowien = count($zamowienia);
    if($ilosc_zamowien == 0)
    {
        echo "so sad</body></html>";
        exit;
    }
  echo "<table>";
  echo "<tr><th>date of order</th>
  <th>tires</th>
  <th>oil</th>
  <th>spark plug</th>
  <th>sum</th>
  <th>surname</th>
  <th>name</th>
  </th>";
  $sumaOpon = 0;
  $sumaSwiec = 0;
  $sumaOlej = 0;
  $osob = 0;
  $imie = 0;
  $sumaSum = 0;
  for($i=0; $i < sizeof($zamowienia); $i++)
  {
    $linia = explode("\t", $zamowienia[$i]);
    $tt = (sizeof($linia)-1);

    $linia[1] = intval($linia[1]);
    
    $linia[2] = intval($linia[2]);  
    
    $linia[3] = intval($linia[3]);

    echo "<tr>
    <th>$linia[0]</th>    
    <th>$linia[1]</th>
    <th>$linia[2]</th>
    <th>$linia[3]</th>
    <th>$linia[4]</th>
    <th>$linia[5]</th>
    <th>$linia[$tt]</th>
    </tr>";
    $sumaOpon += $linia[1];
    $sumaOlej += $linia[2];
    $sumaSwiec += $linia[3];
    $sumaSum += $linia[4];
    $osob += 1;
    if(!is_nan($linia[$tt]))
    $imie +=1;
  }

  echo "<tr>";
  echo "<th>suma</th>";
  echo "<th>$sumaOpon</th>";
  echo "<th>$sumaOlej</th>";
  echo "<th>$sumaSwiec</th>";
  echo "<th>$sumaSum</th>";
  echo "<th>$osob</th>";
  echo "<th>$imie</th>";
echo "</tr>";
  echo "</table>";
    ?>
</body>
</html>