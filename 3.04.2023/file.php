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
    function override(&$a)
    {
        $a += 1;
        echo $a."<br/>";
    }
    $liczba = 1;
    override($liczba);
    override($liczba);
    override($liczba);
    override($liczba);
    override($liczba);
    echo "<br/>";
    echo "<br/>";
    function ammount()
    {
        static $i = 1;
        echo $i."<br/>";
        $i++;
    }
    $tab = array(
        1=> 'bialas',
        2=> 'hiii',
        3=> 'failas'
    );
    ammount();    ammount();    ammount();
    echo "<br/>";
    foreach($tab as $key => $value){
    echo $key.'</br>';
    }
    ?>
</body>
</html>