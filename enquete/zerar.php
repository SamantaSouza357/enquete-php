<?php
session_start();
unset($_SESSION["calabresa"]);
unset($_SESSION["frango"]);
unset($_SESSION["portuguesa"]);
unset($_SESSION["queijo"]);
header("Location:index.php");
?>