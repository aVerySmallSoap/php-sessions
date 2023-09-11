<?php
session_start();
if(isset($_POST["username"], $_POST["password"])){
    if($_POST["username"] <> "" && $_POST["password"] <> ""){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["status"] = "logged";
        header("location: ../dashboard.php");
    }else{
        $_SESSION["status"] = "error";
        header("location: ../index.php");
    }
}
