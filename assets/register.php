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

        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
            <h4><u>Registration</u></h4>
            <h5><label>Full name</label></h5>
            <input type="text" name="full_name" placeholder="Enter your full name">
            <h5><label>Login</label></h5>
            <input type="text" name="login" placeholder="Enter your login">
            <h5><label>Email</label></h5>
            <input type="email" name="email" placeholder="Enter your email address">
            <h5><label>Profile Picture</label></h5>
            <label class="input-file">
                <span maxlenght="5" class="input-file-text" type="text"></span>
                <input type="file" name="avatar">        
                 <span class="input-file-btn">Выберите файл</span>
            </label>
            <h5><label>Password</label></h5>
            <input type="password" name="password" placeholder="Enter the password">
            <h5><label>Password Confirmation</label></h5>
            <input type="password" name="password_confirm" placeholder="Confirm your password">
            <button type="submit">Register</button>
            <p>You already have an account? - <a href="login.php"><u>log in</u></a>!</p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
        
    </div>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('.input-file input[type=file]').on('change', function(){
            let file = this.files[0];
            $(this).closest('.input-file').find('.input-file-text').html(file.name);
        });
    </script>

</body>
</html>