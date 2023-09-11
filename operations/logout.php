<?php
session_unset();
$_SESSION["status"] = "logout";
unset($_SESSION["status"]);
header("location: ../index.php");