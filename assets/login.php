<?php
session_start();

if ($_SESSION['user']) {
    header('Location: index-p.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <style>
        @font-face {font-family: 'Alternates'; src: local('Font Name'), url(fonts/ofont.ru_Montserrat\ Alternates.ttf); }
    </style>
</head>
<body>

    <div class="modal">

        <form action="vendor/signin.php" method="post">
            <h4><u>Log in to your account</u></h4>
            <h5><label>Login</label></h5>
            <input type="text" name="login" placeholder="Enter your login"><br>
            <h5><label>Password</label></h5>
            <input type="password" name="password" placeholder="Enter the password"><br>
            <button type="submit">Login</button>
            <p>You don't have an account? - <a href="register.php"><u>register</u></a>!</p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>

    </div>

</body>
</html>