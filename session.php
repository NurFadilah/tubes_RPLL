<?php
session_start();
if(!isset($_SESSION['username']))
{
echo "<center>Maaf Username atau Password anda salah ";
echo "<center><a href='logout.php'>Login</a></center>";
exit;
}
?>