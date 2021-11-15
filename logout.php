<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
unset($_SESSION['name']);
header ('location: login.php');
?>
