<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        *{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        #warning{
            color: #978103;
            background-color:#F7F5BC;
            width:25%;
            padding: 25px;
            border-radius:25px;
            text-align:center;
            opacity: 0.7;
        }
        #fatal{
            color: #900603;
            background-color:#BC544B;
            padding: 25px;
            width:25%;
            border-radius:25px;
            text-align:center;
            opacity: 0.7;
        }
        #success{
            color: #90EE90;
            background-color:#CEFAD0;
            padding: 25px;
            width:25%;
            border-radius:25px;
            text-align:center;
            opacity: 0.7;
        }
        #container{
            border: 2px groove #EFCC00;
            border-radius: 25px;
            margin: 5px;
            padding: 5px;
            text-align: center;
            display: flexbox;
            float: left;
            width:50%;
            background-color: rgb(240, 234, 224);
            opacity: 0.7;
        }
        hr{
            width: 25%;
        }
    </style>
    <?php
    @ $user = $_POST["username"];
    @ $password = $_POST["password"];
    @ $new_password = $_POST["new_password"];
    if(empty($user) || empty($password) || empty($new_password)){
    ?>

</head>
<body>
    <section id="container">
    <h1> Recover </h1><hr>
    <form method="post" action="newPassword.php">
        <p> Username: <input type="text" name="username"></p>
        <p> Password: <input type="password" name="password"></p>
        <p> New Password: <input type="password" name="new_password"></p>
        <p> <input type="submit" value="Submit"> </p>
    </form>
    <p id="warning"> Your login details are secured 🔒</p>
</section>
<?php
    }else{
        @$try_my_sql = new mysqli("localhost", "root", "");
        if(!$try_my_sql)
        {
            echo "Ong, cant connect to database<br></body></html>";
            exit;
        }
        @$my_sql = new mysqli("localhost", "root", "", "uwierz");
        if(!$my_sql)
        {
            echo "Ong, cant connect to chosen database<br></body></html>";
            exit;   
        }
        $query = "UPDATE uwierzytelnieni_uzytkownicy SET haslo = sha1('$new_password') WHERE uzytkownik = '$user' AND haslo = sha1('$password')";
        $result = $my_sql->query($query);
        echo $query;
        if( mysqli_affected_rows($my_sql) > 0 )
        {
            echo "<h1 id='success'>Success.</h1>";
            echo "<p id='warning'>Login details protected 🔒</p>";
        }
        else
        {
            echo "<p id='warning'>Warning: Login details might be incorrect</p>";  
        }
        $my_sql->close();
    }
    ?>
</body>
</html>