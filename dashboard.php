<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/grid.css">
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="header">
        <div class="left">
            <button onclick=""></button>
        </div>
        <div class="right">
            <ol>
                <li class="head-item">
                    <a href="#"></a>
                </li>
                <li class="head-item">
                    <a href="#"></a>
                </li>
                <li class="head-item">
                    <a href="#"></a>
                </li>
            </ol>
            <span id="title-logo"></span>
        </div>
    </div>

    <?php echo $_SESSION["username"]?>
</body>
</html>
