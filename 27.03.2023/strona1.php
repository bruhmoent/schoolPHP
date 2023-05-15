<?php
session_start();
$_SESSION['zmiana_sesji'] = "hola";
echo 'zawarosc $_SESSION[\'zmiana_sesji\'] wynysoi '.$_SESSION['zmiana_sesji'].'<br/>';
?>
<a href="strona2.php">next</a> 