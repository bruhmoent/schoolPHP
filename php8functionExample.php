<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New standard function</title>
</head>
<body>
    <?php
    declare(strict_types = 1);
    function calcStatsYears(int $start, int $end, ?bool $print = true)  : int{
        $days = ($end - $start) * 365;
        $hours =  $days * 24;
        $mins = $hours * 60;
        $secs = $mins * 60;
        if($print == true)
        {
            print "From the beginning of the year - $start to the end of the year $end passed:".PHP_EOL;
            print "$days days, $hours hours, $mins minutes, $secs seconds.".PHP_EOL;
        }
        return (int)$secs;
    }

    $sec1 = calcStatsYears(start: 1901, end: 2000, print: true);
    $sec2 = calcStatsYears(start: 2019, end: 2001);
    print "sum of seconds:".($sec1 + $sec2);
    ?>
</body>
</html>
