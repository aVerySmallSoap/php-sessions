<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/grid.css">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Login</title>
</head>
<body style="background-color: #FFF3DA;">
    <div class="container">
        <div class="inner-container">
            <div class="divider-container">
                <div class="left-container">
                    <div class="title-container">
                        <span id="title">Login Form</span>
                    </div>
                    <form action="operations/verification.php" method="post" id="main-form">
                        <div class="form-row">
                            <label for="username">Username: </label>
                            <input type="text" name="username" id="username-field">
                        </div>
                        <div class="form-row">
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password-field">
                        </div>
                        <div class="form-row">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <hr id="container-break">
                <div class="right-container">
                    <img src="/misc/images/test.jpg" alt="test image">
                </div>
            </div>
        </div>
    </div>

</body>
</html>
