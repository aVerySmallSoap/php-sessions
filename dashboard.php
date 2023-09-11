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
    <link rel="stylesheet" href="./CSS/no-margin.css">
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body>

    <div class="container">
        <div class="inner-container">
            <div id="title-container">
                Welcome <?php echo "<span class='title-username'>". $_SESSION["username"] ."</span>"?>!
            </div>
            <div id="subtitle-container">This is the dashboard!</div>
            <div class="container-body">
                <form action="./operations/logout.php" method="post">
                    <button class="btn">Log-out</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
