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
    function printWithEOL(string $content)
    {
        print $content;
        print PHP_EOL;
    }

    function printWithNL(?string $content = "", ?bool $newline = true)
    {
        print $content;
        if($newline == true)
            print PHP_EOL;
    }

    printWithNL("Kumamala", false);
    printWithNL("Kumamala3");
    printWithNL("Kumamala4");
    printWithNL();

    $print = function (string $content)
    {
        print $content;
        print PHP_EOL;
    };

    $print('po raz 1');

    function myFunction($callback)
    {
        $callback("2");
    }

    myFunction($print);

    $var = 'po raz 3';
    $printAge = function($callback) use ($var)
    {
        $callback($var);
    };
    $printAge($print);
    ?>
</body>
</html>
