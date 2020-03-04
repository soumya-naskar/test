<?php 
session_start();
echo $username;
echo '<br>';
$_SESSION["favcolor"] = 'new color';
echo $_SESSION["favcolor"];
?>