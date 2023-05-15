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
    $iloscopon = intval($_GET['iloscopon']);
    $iloscoleju = intval($_GET['iloscoleju']);
    $iloscswiec = intval($_GET['iloscswiec']);
    $nazwisko = $_GET['nazwisko'];
    $imie = $_GET['imie'];
    $ilosc = $iloscopon + $iloscoleju + $iloscswiec;
   function shopping($ilosc, $iloscopon, $iloscoleju,$iloscswiec, $nazwisko, $imie)
   {
    if($ilosc > 0)
    {
    echo $imie. $nazwisko.", "." to jest twoja lista zakupow: <br><hr>";
    if($iloscopon > 0 )
    echo "Ilosc opon: ".$iloscopon."<br>";
    if($iloscoleju > 0 )
    echo "Ilosc oleju: ".$iloscoleju."<br>";
    if($iloscswiec > 0 )
    echo "Ilosc swiec: ".$iloscswiec."<br>";
    
    else { echo "Nie dokonales zamownienia. "; }

    define('CENAOPON',300);
    define('CENAOLEJU',100);
    define('CENASWIEC',80);

    $wartosc = $iloscopon * CENAOPON + $iloscoleju * CENAOLEJU + $iloscswiec * CENASWIEC;
    echo "<br> Wartosc netto: ".$wartosc."PLN <br>";
    $stawkavat = 0.23;
    $wartosc *=(1+$stawkavat);
    echo "<br> bruto: ".number_format($wartosc,2).'PLN <br>';
    @ $wp=fopen("zamowienia.txt", 'a');
    if(!$wp)
    {
        echo "nie mozna zapisac</body></html>";
        exit;
    }
    $data = date("H:i, jS F");
    echo "<p>pirzehjanie pzryejhete o :" .$data."</p>";
    $ciagwyjsciowy=$data."\t".$iloscopon."\t".$iloscoleju."\t".$iloscswiec."\t".$wartosc."\t". $nazwisko. "\t".$imie."\n";
    fwrite($wp, $ciagwyjsciowy);
    fclose($wp);       
}else{
        echo "Nie zlozyles zamownienia\n";
    }
    }
   shopping($ilosc, $iloscopon, $iloscoleju,$iloscswiec, $nazwisko, $imie);
   ?>
</body>
</html>