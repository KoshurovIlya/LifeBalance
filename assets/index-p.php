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
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <style>
        @font-face {font-family: 'Alternates'; src: local('Font Name'), url(fonts/ofont.ru_Montserrat\ Alternates.ttf); }
    </style>
</head>
<body>


    <div class="modal-video modal-walking">

        <div class="modal-conatiner">

            <div class="modal-content">

                <div class="modal-heading flex">

                    <h6>Walking</h6>

                    <button class="close-modal">&times;</button>

                </div>

                <video controls loop>
                    <source src="videos/153976-806571973 (1080p).mp4" type="video/mp4">
                </video>

            </div>

        </div>

    </div>

    <div class="modal-video modal-bodyweight">

        <div class="modal-conatiner">

            <div class="modal-content">

                <div class="modal-heading flex">

                    <h6>Bodyweight Strength Training</h6>

                    <button class="close-modal">&times;</button>

                </div>

                <video controls loop>
                    <source src="videos/153976-806571973 (1080p).mp4" type="video/mp4">
                </video>

            </div>

        </div>

    </div>

    <div class="modal-video modal-stretching">

        <div class="modal-conatiner">

            <div class="modal-content">

                <div class="modal-heading flex">

                    <h6>Stretching and Flexibility</h6>

                    <button class="close-modal">&times;</button>

                </div>

                <video controls loop>
                    <source src="videos/153976-806571973 (1080p).mp4" type="video/mp4">
                </video>

            </div>

        </div>

    </div>

    <div class="modal-video modal-cardiovascula">

        <div class="modal-conatiner">

            <div class="modal-content">

                <div class="modal-heading flex">

                    <h6>Cardiovascular Exercise</h6>

                    <button class="close-modal">&times;</button>

                </div>

                <video controls loop>
                    <source src="videos/153976-806571973 (1080p).mp4" type="video/mp4">
                </video>

            </div>

        </div>

    </div>

    <div class="modal-video modal-motivation">

        <div class="modal-conatiner">

            <div class="modal-content">

                <div class="modal-heading flex">

                    <h6>Motivation</h6>

                    <button class="close-modal">&times;</button>

                </div>

                <video controls loop>
                    <source src="videos/153976-806571973 (1080p).mp4" type="video/mp4">
                </video>

            </div>

        </div>

    </div>

    <div class="modal-video modal-wellbeing">

        <div class="modal-conatiner">

            <div class="modal-content">

                <div class="modal-heading flex">

                    <h6>Boost Your Well-being</h6>

                    <button class="close-modal">&times;</button>

                </div>

                <video controls loop>
                    <source src="videos/153976-806571973 (1080p).mp4" type="video/mp4">
                </video>

            </div>

        </div>

    </div>

    <header class="header">

        <nav class="header-nav">

            <ul class="header-ul flex">

                <div class="header-logo flex">

                    <a href="index-p.php"><img class="logo" src="img/logo/LB.png" alt=""></a>

                </div>

                <div class="header-menu flex">

                    <h6><li><a href="#advices">Advices</a></li></h6>
                    <h6><li><a href="#exercises">Exercises</a></li></h6>
                    <h6><li><a href="#proper-nutrition">Proper nutrition</a></li></h6>
                    <h6><li><a href="#motivation">Motivation</a></li></h6>
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

    <main>

        <section>

            <div class="main-container">

                <div class="main-content">

                    <div class="main-text-info flex">

                        <h1>Our <u>goal</u> is people's health</h1>
    
                    </div>
    
                    <div class="main-block-active-information flex">
    
                        <div class="main-blocks-info">
    
                            <div class="main-blocks flex">
        
                                <div class="main-block-content red">
        
                                    <div class="icon-info flex">
        
                                        <h1><svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg></h1>
                                        
                                        <h4>Advices</h4>
        
                                    </div>
        
                                    <div class="more-info">
        
                                        <p>Physical Activity, Proper Nutrition, Sleep, Stress Management, Mental Well-being</p>
        
                                    </div>
        
                                </div>
        
                                <div class="main-block-content green">
        
                                    <div class="icon-info flex">
        
                                        <h1><svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg></h1>
                                        
                                        <h4>Exercises</h4>
        
                                    </div>
        
                                    <div class="more-info">
        
                                        <p>Walking, Bodyweight Strength Training, Stretching and Flexibility, Cardiovascular Exercise of Your Choice</p>
        
                                    </div>
        
                                </div>
        
                            </div>
        
                            <div class="main-blocks flex">
        
                                <div class="main-block-content pink">
        
                                    <div class="icon-info flex">
        
                                        <h1><svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg></h1>
                                        
                                        <h4>Proper nutrition</h4>
        
                                    </div>
        
                                    <div class="more-info">
        
                                        <p>Variety, Portion Control, Preference for Whole Foods, Moderation in Sweeteners and Sugar</p>
        
                                    </div>
        
                                </div>
        
                                <div class="main-block-content orange">
        
                                    <div class="icon-info flex">
        
                                        <h1><svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg></h1>
                                        
                                        <h4>Motivation</h4>
        
                                    </div>
        
                                    <div class="more-info">
        
                                        <p>Goal Setting and Vision, Break it Down into Small Steps, Support and Rewards</p>
        
                                    </div>
        
                                </div>
        
                            </div>
        
                        </div>
        
                        <div class="main-big-block-info">
        
                            <div class="main-big-block wellbeing-btn">
        
                                <h1><svg class="icon-play" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/></svg></h1>
        
                                <h2>Video</h2>
        
                                <p>Boost Your Well-being: Unveiling the Secrets of a Healthy Lifestyle. Don't miss the opportunity to enhance your physical and emotional well-being. Join us in this exciting video and uncover the secrets of a healthy lifestyle that will help you become the best version of yourself!</p>
        
                            </div>
        
                        </div>
    
                    </div>

                </div>

            </div>

        </section>

    </main>

    <aside>

        <section id="advices">

            <div class="advices-container">

                <div class="aside-container-width">

                    <div class="advices-content">

                        <div class="heading reveal">
    
                            <h1>Advices</h1>
    
                        </div>
    
                        <div class="advices-blocks-container">
    
                            <div class="advices-blocks-content">
    
                                <div class="advices-blocks reveal">
    
                                    <div class="advices-block">
    
                                        <div class="advices-block-info flex">
        
                                            <h5>Physical Activity:</h5>
        
                                            <h1><svg class="advices-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/></svg></h1>
                                            
                                        </div>
        
                                    </div>
        
                                    <div class="advices-more-info">
        
                                        <p><u>Physical activity</u> is an essential part of a healthy lifestyle. Regular exercise helps strengthen muscles and bones, improve cardiovascular health, control weight, and enhance overall endurance. It also promotes the release of endorphins, the "feel-good" hormones, which help reduce stress and improve mood.</p>
        
                                    </div>
    
                                </div>
    
                                <div class="advices-blocks reveal">
    
                                    <div class="advices-block">
    
                                        <div class="advices-block-info flex">
        
                                            <h5>Proper Nutrition:</h5>
        
                                            <h1><svg class="advices-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/></svg></h1>
                                            
                                        </div>
        
                                    </div>
        
                                    <div class="advices-more-info">
        
                                        <p><u>Proper nutrition</u> plays a vital role in maintaining health and well-being. It ensures the body receives necessary nutrients, vitamins, and minerals. A healthy diet involves consuming a variety of foods, including fruits, vegetables, whole grains, lean protein sources, while limiting empty calories, sugar, and saturated fats.</p>
    
                                    </div>
    
                                </div>
    
                                <div class="advices-blocks reveal">
    
                                    <div class="advices-block">
    
                                        <div class="advices-block-info flex">
        
                                            <h5>Sleep:</h5>
        
                                            <h1><svg class="advices-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/></svg></h1>
                                            
                                        </div>
        
                                    </div>
        
                                    <div class="advices-more-info">
        
                                        <p>Quality and duration of sleep are crucial for <u>health</u> and well-being. Adequate sleep helps restore energy, supports the immune system, enhances cognitive functions, and contributes to overall physical and emotional well-being. It is recommended to strive for regular sleep patterns, create a conducive sleep environment, and maintain a consistent sleep routine.</p>
    
                                    </div>
    
                                </div>
    
                                <div class="advices-blocks reveal">
    
                                    <div class="advices-block">
    
                                        <div class="advices-block-info flex">
        
                                            <h5>Stress Management:</h5>
        
                                            <h1><svg class="advices-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/></svg></h1>
                                            
                                        </div>
        
                                    </div>
        
                                    <div class="advices-more-info">
        
                                        <p><u>Stress</u> is a natural part of life, but effective stress management is essential for maintaining a healthy lifestyle. Regular practices such as meditation, deep breathing exercises, yoga, or physical activity can help reduce stress levels. It is also important to pay attention to emotions, find time for relaxation, and develop effective coping strategies.</p>
    
                                    </div>
    
                                </div>
    
                                <div class="advices-blocks reveal">
    
                                    <div class="advices-block">
    
                                        <div class="advices-block-info flex">
        
                                            <h5>Mental Well-being:</h5>
        
                                            <h1><svg class="advices-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/></svg></h1>
                                            
                                        </div>
        
                                    </div>
        
                                    <div class="advices-more-info">
        
                                        <p>A healthy lifestyle also encompasses caring for mental well-being. <u>This involves nurturing emotional and psychological health, cultivating positive relationships, managing emotions effectively, and striving for personal growth and self-improvement.</u> Regular practice of deep relaxation, meditation, engaging in meaningful social connections, and seeking support also contribute to strengthening mental well-being.</p>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
    
                    </div>

                </div>

            </div>

        </section>

        <section id="exercises">

            <div class="exercises-container">

                <div class="aside-container-width">

                    <div class="exercises-content">

                        <div class="heading reveal">

                            <h1>Exercises</h1>

                        </div>

                        <div class="exercises-blocks-content flex">

                            <div class="exercises-block reveal">

                                <h1 class="icon-exercises red-exercises"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg></h1>

                                <h5>Walking</h5>

                                <p>Simple walks outdoors are an excellent way to start your journey towards an active lifestyle. Put on comfortable shoes and begin with short walks of 20-30 minutes a few times a week. Gradually increase the duration and intensity of your walks as you gradually build up your physical activity.</p>

                                <div class="exercises-btn"><button class="exercises-btn-walking">Watch video <h1><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></h1></button></div>

                            </div>

                            <div class="exercises-block reveal">

                                <h1 class="icon-exercises green-exercises"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg></h1>

                                <h5>Bodyweight Strength Training</h5>

                                <p>Performing exercises using your body weight is an effective way to strengthen muscles and improve overall physical strength. Include basic exercises such as push-ups, squats, lunges, and planks. Start with a few repetitions and gradually increase them as your fitness level improves.</p>

                                <div class="exercises-btn"><button class="exercises-btn-bodyweight">Watch video <h1><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></h1></button></div>

                            </div>

                            <div class="exercises-block reveal">

                                <h1 class="icon-exercises pink-exercises"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg></h1>

                                <h5>Stretching and Flexibility</h5>

                                <p>Regular stretching and flexibility exercises help improve joint mobility, reduce the risk of injuries, and alleviate muscle tension. Incorporate stretching exercises into your workout routine, such as forward bends, torso twists, leg stretches, and arm stretches. Hold each position for 15-30 seconds and repeat several times.</p>

                                <div class="exercises-btn"><button class="exercises-btn-stretching">Watch video <h1><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></h1></button></div>

                            </div>

                            <div class="exercises-block reveal">

                                <h1 class="icon-exercises orange-exercises"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg></h1>

                                <h5>Cardiovascular Exercise of Your Choice</h5>

                                <p>To improve cardiovascular endurance, choose any activity that you enjoy and suits your fitness level. It could be running, brisk walking, swimming, cycling, or aerobic workouts. Start with short intervals of activity and rest, and gradually increase the duration.</p>

                                <div class="exercises-btn"><button class="exercises-btn-cardiovascular">Watch video <h1><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></h1></button></div>

                            </div>

                        </div>

                        <div class="exercises-block-info reveal">

                            <p>Remember, as a <u>beginner</u>, it's important to <u>listen</u> to your body and <u>respect</u> your personal limits. Gradually <u>increase</u> the intensity of your workouts and seek guidance from a trainer or professional if you have any questions or need individualized workout adaptations.</p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="proper-nutrition">

            <div class="proper-nutrition-container">

                <div class="aside-container-width">

                    <div class="proper-nutrition-content">

                        <div class="heading">

                            <h1>Proper nutrition</h1>

                        </div>

                        <div class="proper-nutrition-article-container">

                            <div class="proper-nutrition-article-content flex">

                                <div class="proper-nutrition-people-container">

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people-left-people flex">

                                            <img src="img/peoples/people-1.jpg" alt="">
    
                                            <div class="line-proper-nutrition" style="width: 3.91vw;"></div>
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>1.<u>Variety:</u>Balanced nutrition involves consuming a wide range of food groups, including fruits, vegetables, grains, protein sources, and healthy fats. Variety ensures that you receive all the necessary nutrients and minerals to support your health.</p>
    
                                        </div>

                                    </div>

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people-left-people flex">

                                            <img src="img/peoples/people-2.jpg" alt="">
    
                                            <div class="line-proper-nutrition" style="width: 11.72vw;"></div>
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>3.<u>Preference for Whole Foods:</u>Prioritize natural, unprocessed foods. They contain more nutrients and fewer added sugars, salt, and artificial additives. Aim to limit foods high in trans fats and saturated fats.</p>

                                        </div>

                                    </div>

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people-left-people flex">

                                            <img src="img/peoples/people-3.jpg" alt="">
    
                                            <div class="line-proper-nutrition" style="width: 19.53vw;"></div>
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>5.<u>Importance of Breakfast:</u>Never skip breakfast - it is the most important meal of the day. A breakfast rich in protein, fiber, and complex carbohydrates provides energy and helps maintain stable blood sugar levels.</p>

                                        </div>

                                    </div>

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people-left-people flex">

                                            <img src="img/peoples/people-4.jpg" alt="">
    
                                            <div class="line-proper-nutrition" style="width: 27.34vw;"></div>
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>7.<u>Home Cooking:</u>Cooking meals at home allows you to control the quality and content of ingredients. It helps avoid excessive addition of salt, sugar, or oil and allows the use of fresh ingredients and spices to enhance flavors.</p>
    
                                        </div>

                                    </div>

                                </div>

                                <div class="proper-nutrition-article-line-vc"></div>

                                <div class="proper-nutrition-people-container">

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people flex">
    
                                            <div class="line-proper-nutrition" style="width: 7.81vw;"></div>

                                            <img src="img/peoples/people-5.jpg" alt="">
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>2.<u>Portion Control:</u>Monitor your portion sizes to avoid overeating. Learn to listen to your body's hunger and fullness signals. Eat slowly and savor your food to allow your body to recognize satiety.</p>

                                        </div>

                                    </div>

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people flex">
    
                                            <div class="line-proper-nutrition" style="width: 15.63vw;"></div>

                                            <img src="img/peoples/people-6.jpg" alt="">
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>4.<u>Moderation in Sweeteners and Sugar:</u>Sweets and sugar are part of life, but their consumption should be limited. Choose natural and healthier alternatives, such as fresh fruits or small amounts of dark chocolate.</p>

                                        </div>

                                    </div>

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people flex">
    
                                            <div class="line-proper-nutrition" style="width: 23.44vw;"></div>

                                            <img src="img/peoples/people-7.jpg" alt="">
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>6.<u>Hydration:</u>Proper nutrition includes moderate and regular water consumption. Water not only helps maintain optimal hydration but also improves digestion, metabolism, and overall well-being. Aim to drink water before meals and throughout the day.</p>

                                        </div>

                                    </div>

                                    <div class="propr-nutrition-people-content">

                                        <div class="proper-nutrition-people flex">
    
                                            <div class="line-proper-nutrition" style="width: 31.25vw;"></div>

                                            <img src="img/peoples/people-8.jpg" alt="">
    
                                        </div>
    
                                        <div class="proper-nutrition-people-info reveal">
    
                                            <p>8.<u>Moderate Alcohol Consumption:</u>If you consume alcohol, do so in moderation. It is recommended to limit alcohol intake and practice moderation. Choose low-calorie options and avoid frequent or excessive consumption.</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="motivation">

            <div class="motivation-container">

                <div class="aside-container-width">

                    <div class="motivation-content">

                        <div class="heading reveal">

                            <h1>Motivation</h1>

                        </div>

                        <div class="motivation-blocks-container flex">

                            <div class="motivation-block reveal">

                                <h5><u>Goal Setting and Vision</u></h5>

                                <p>Setting a goal is a crucial source of motivation. Define a clear and specific goal that you want to achieve. Be aware of why this goal is important to you and how it aligns with your overall vision and values. Write down your goal and constantly remind yourself of it to maintain motivation throughout the journey.</p>

                            </div>

                            <div class="motivation-block reveal">

                                <h5><u>Break it Down into Small Steps</u></h5>

                                <p>A long journey to achieving a goal can feel daunting and overwhelming. However, by breaking it down into small, attainable steps, you create opportunities for continuous progress and small victories. Each time you accomplish one of these small steps, you reinforce your motivation and confidence in your abilities.</p>

                            </div>

                            <div class="motivation-block reveal">

                                <h5><u>Support and Rewards</u></h5>

                                <p>Seek support from those around you, whether it's family, friends, or a community of like-minded individuals. Engaging with people who share similar goals or have gone through a similar journey can be inspiring and motivating. It's also important to reward yourself for achievements and progress. Set small rewards for yourself after each significant milestone or accomplishment to maintain a positive mindset and further motivation.</p>

                            </div>

                        </div>

                        <div class="motivation-information flex reveal">

                            <p><u>Motivation</u> is a driving force that sustains us on the path to achieving our <u>goals</u>. No matter how big or challenging your goal may seem, use these three <u>principles</u> to maintain your motivation and keep moving forward. Remember that motivation can be fluid, so constantly reinforce your internal motivation while also seeking external sources of support to achieve <u>success</u>.</p>

                            <div class="motivation-video-button">

                                <button class="motivation-btn">Watch video <h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></h1></button>
    
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="contacts">

            <div class="contacts-container">

                <div class="aside-container-width">

                    <div class="contacts-content">

                        <div class="heading reveal">

                            <h1>Contacts</h1>

                        </div>

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

    </aside>

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

                        <h6><a href="#advices">Advices</a></h6>
                        <h6><a href="#exercises">Exercises</a></h6>
                        <h6><a href="#proper-nutrition">Proper nutrition</a></h6>
                        <h6><a href="#motivation">Motivation</a></h6>

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