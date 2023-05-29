<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="files.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="305675673234289374892374892374982374289347289470720"/>
            <input type="file" name="plik"/>
            <input type="submit" value="Dodaj plik"/>
        </div>
    </form>
    <?php
    if(isset($_FILES['plik']))
    {
        switch($_FILES['plik']['error'])
        {
            case 0:
                if($_FILES['plik']['type'] == "image/jpeg" || $_FILES['plik']['type'] == "image/png" || $_FILES['plik']['type'] == "image/gif")
                {
                    move_uploaded_file($_FILES['plik']['tmp_name'], "images/".md5(rand()*rand()+rand()).$_FILES['plik']['name']);
                    echo "g";
                }
                else{
                    echo "fail";
                }
                break;
            case 1:
                echo "fat  file (php.ini)";
                break;
            case 2:
                echo "fat  file";
                break;
            case 3:
                echo "slim  hungry no food looking mf file";
                break;
            case 4:
                echo "the file aint even real";
                break;
            default:
                echo "watch yo step mf";
                break;
        }
    } 
    ?>
</body>
</html>