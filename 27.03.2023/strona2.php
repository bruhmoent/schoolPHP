<?php
session_start();
echo 'zawarosc $_SESSION[\'zmiana_sesji\'] wynysoi '.$_SESSION['zmiana_sesji'].'<br/>';
unset($_SESSION['zmiana_sesji'] );
?>
<a href="strona3.php">next</a> 