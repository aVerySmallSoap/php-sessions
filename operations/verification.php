<?php
session_start();
if(isset($_POST["username"], $_POST["password"])){
    if($_POST["username"] <> "" && $_POST["password"] <> ""){
        $_SESSION["username"] = $_POST["username"];
        header("location: ../dashboard.php");
    }else{
        header("location: ../index.php");
    }
}
