<?php
session_start();
unset($_SESSION["username"]);
header("location:loginandreg.php");

?>