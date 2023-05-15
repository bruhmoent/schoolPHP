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
     $isbn= $_POST['isbn'];
    echo "<input type='hidden' name='isbn' value= ".$isbn."/>";
    ?>
<form action="rumunski.php" method="post">
 <table> 
    <tr>
        <tr>
            <td>recenzja</td>
            <textarea name="recenzja" rows="4" cols="50" form="il"></textarea>
        </tr>
   
        <tr>
            <td colspan="2"><input type="submit" value="Zapisz"></td>
        </tr>
    </table>
</form>
</body>
</html>