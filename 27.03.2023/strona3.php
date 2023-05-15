<?php
session_start();
echo 'zawarosc $_SESSION[\'zmiana_sesji\'] wynysoi '.$_SESSION['zmiana_sesji'].'<br/>';
session_destroy();
?>