<?php 
session_start();

session_unset();
header("Location:http://localhost/demo/HelpPage/Help.php");
?>