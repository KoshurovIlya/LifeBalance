<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeBalance</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
    <style>
        @font-face {font-family: 'Alternates'; src: local('Font Name'), url(fonts/ofont.ru_Montserrat\ Alternates.ttf); }
    </style>
</head>
<body>
    <header class="header">

        <nav class="header-nav">

            <ul class="header-ul flex">

                <div class="header-logo flex">

                    <a href="index-p.php"><img class="logo" src="img/logo/LB.png" alt=""></a>

                </div>

                <div class="header-menu flex">

                    <h6><li><a href="index-p.php#advices">Advices</a></li></h6>
                    <h6><li><a href="index-p.php#exercises">Exercises</a></li></h6>
                    <h6><li><a href="index-p.php#proper-nutrition">Proper nutrition</a></li></h6>
                    <h6><li><a href="index-p.php#motivation">Motivation</a></li></h6>
                    <h6><li><a href="#contacts">Contacts</a></li></h6>
                    <h6><li><a href="blog-p.php">Blog</a></li></h6>

                </div>

                <div class="header-profile flex">

                    <form class="flex">
                        <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                        <h6><a href="vendor/logout.php" class="logout">Exit</a></h6>
                    </form>

                </div>

            </ul>

        </nav>

    </header>

    <section>

        <div class="blog-container flex">

            <div class="blog-content">

                <h2>Journey to a Healthy Lifestyle: <u>Small Steps, Big Changes</u></h2>

                <div class="blog-content-block-info">

                    <p>Welcome to our <u>blog</u> on <u>healthy living</u>! Here, we aim to <u>inspire</u> and <u>support</u> you on your <u>journey</u> to becoming the best version of yourself. We believe that a healthy lifestyle is not just about following rules but also about creating harmony between your physical and emotional well-being.</p>

                </div>

                <div class="blog-content-block-info">

                    <p>In this blog, we will discuss various aspects of a healthy lifestyle, providing tips, information, and inspiration for your overall well-being. Together, we will explore the following topics:</p>

                </div>

                <div class="blog-content-block-info">

                    <p><u>Physical Activity</u>: We will delve into different forms of physical activity, ranging from simple exercises at home to gym workouts or outdoor sports. You will learn about the benefits of physical activity for your health, methods of motivation, and how to incorporate a regular exercise routine into your life.</p>

                </div>

                <div class="blog-content-block-info">

                    <p><u>Proper Nutrition</u>: We will talk about healthy eating and the importance of making the right food choices. You will gain insights into the essential nutrients your body needs and learn how to create a balanced diet that includes fruits, vegetables, grains, proteins, and healthy fats. We will also share tips on meal planning, reading food labels, and developing healthy eating habits.</p>

                </div>

                <div class="blog-content-block-info">

                    <p><u>Mental Well-being</u>: A healthy lifestyle also requires attention to your emotional and mental state. We will discuss stress management techniques, maintaining a positive mindset, and developing emotional resilience. We will offer various practices such as meditation, deep breathing, and self-improvement exercises to help you achieve harmony in your life.</p>

                </div>

                <div class="blog-content-block-info">

                    <p><u>Balance and Self-Care</u>: Striking a balance between work, rest, and self-care is crucial for a healthy lifestyle. We will explore the importance of quality sleep, rejuvenation, and self-care rituals. You will discover strategies for improving sleep quality, relaxation, and creating self-care routines that will leave you feeling refreshed, energized, and balanced.</p>

                </div>

                <div class="blog-content-block-info">

                    <p>We invite you to join our community, where you can share your stories, achievements, and questions. Together, we can support one another, find inspiration, and move forward on the path to a healthy lifestyle.</p>

                </div>

            </div>

            <div class="sticky-block sticky">

                <h1><img src="img/icons/telegram-fill-svgrepo-com.svg" alt=""></h1>

                <p>We are actively running our blog in <u>Telegram</u></p>

                <a href="#"><button>Look</button></a>

            </div>

        </div>

    </section>

    <section id="contacts">

        <div class="contacts-container">

            <div class="aside-container-width">

                <div class="contacts-content">

                    <div class="contacts-apps">

                        <div class="contacts-title">

                            <h5>Our blog is maintained in <u>Telegram</u></h5>

                        </div>

                        <nav class="nav-contacts-apps">

                            <ul class="ul-contacts-apps flex">

                                <li><a href="#"><img src="img/icons/instagram-svgrepo-com.svg" alt="instagram"></a></li>
                                <li><a href="#"><img src="img/icons/facebook-176-svgrepo-com.svg" alt="facebook"></a></li>
                                <li><a href="#"><img src="img/icons/twitter-154-svgrepo-com.svg" alt="twitter"></a></li>
                                <li><a href="#"><img src="img/icons/vk-svgrepo-com.svg" alt="vk"></a></li>
                                <li><a href="#"><img src="img/icons/gmail-svgrepo-com.svg" alt="gmail"></a></li>
                                <li><a href="#"><img src="img/icons/telegram-fill-svgrepo-com.svg" alt="telegram"></a></li>

                            </ul>

                        </nav>

                    </div>

                </div>
                
            </div>

        </div>

    </section>

    <footer>

        <div class="footer-content flex">

            <div class="footer-time-container">

                <h1><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/><path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/></svg></h1>

                <h3>Daily</h3>

                <h6>09:00 to 18:00</h6>

            </div>

                <div class="footer-active-links">

                    <div class="footer-active-links-content">

                            <h5><u>Blog</u></h5>

                            <h6><a href="#">Physical Activity</a></h6>
                            <h6><a href="#">Proper Nutrition</a></h6>
                            <h6><a href="#">Mental Well-being</a></h6>
                            <h6><a href="#">Balance and Self-Care</a></h6>

                    </div>

                </div>

                <div class="footer-active-links">

                    <div class="footer-active-links-content">

                        <h5><u>Politics</u></h5>

                        <h6><a href="politics-p.php">Privacy policy</a></h6>

                    </div>

                </div>

                <div class="footer-active-links">

                    <div class="footer-active-links-content">

                        <h5><u>The main thing</u></h5>

                        <h6><a href="./../index.php#advices">Advices</a></h6>
                        <h6><a href="./../index.php#exercises">Exercises</a></h6>
                        <h6><a href="./../index.php#proper-nutrition">Proper nutrition</a></h6>
                        <h6><a href="./../index.php#motivation">Motivation</a></h6>

                    </div>

                </div>

                <div class="footer-active-links">

                    <div class="footer-active-links-content">

                        <h5><u>Contact us</u></h5>

                        <h6><a href="#">instagram</a></h6>
                        <h6><a href="#">facebook</a></h6>
                        <h6><a href="#">twitter</a></h6>
                        <h6><a href="#">gmail</a></h6>

                    </div>

                </div>

        </div>

    </footer>

    <script src="../script.js"></script>
</body>
</html>