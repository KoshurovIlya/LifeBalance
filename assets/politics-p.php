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

    <aside>

        <section>

            <div class="politics-container">
    
                <div class="aside-container-width">
    
                    <div class="politics-content">
    
                        <h2><u>Personal Data Privacy Policy</u></h2>
    
                        <p>This Privacy Policy of Personal data (hereinafter referred to as the Privacy Policy) applies to all information that the <u>LifeBalance</u> website (hereinafter referred to as the Healthy Lifestyle Website) located on the domain name <u>lifebalance.net</u> (as well as its subdomains), can get about the User while using the site lifebalance.net (as well as its subdomains), its programs and his products.</p>
    
                        <h3>1. Definition of terms</h3>
    
                        <p>1.1 The following terms are used in this Privacy Policy:</p>
    
                        <p>1.1.1. "Website Administration" (hereinafter referred to as the Administration) – authorized employees for the management of the LifeBalance website, who organize and (or) process personal data, as well as determine the purposes of processing personal data, the composition of personal data to be processed, actions (operations) performed with personal data.</p>
    
                        <p>1.1.2. "Personal data" means any information relating directly or indirectly to a specific or identifiable individual (subject of personal data).</p>
    
                        <p>1.1.3. "Personal Data processing" means any action (operation) or set of actions (operations) performed with or without the use of automation tools with personal data, including collection, recording, systematization, accumulation, storage, clarification (updating, modification), extraction, use, transfer (distribution, provision, access), depersonalization, blocking, deletion, destruction of personal data.</p>
    
                        <p>1.1.4. "Confidentiality of personal data" is a mandatory requirement for the Operator or other person who has access to personal data to prevent their dissemination without the consent of the subject of personal data or the presence of other legal grounds.</p>
    
                        <p>1.1.5. "LifeBalance Website" is a set of interconnected web pages hosted on the Internet at a unique address (URL): lifebalance.net , as well as its subdomains.</p>
    
                        <p>1.1.6. "Subdomains" are pages or a set of pages located on third-level domains belonging to the LifeBalance website, as well as other temporary pages, at the bottom of which the contact information of the Administration is indicated.</p>
    
                        <p>1.1.5. "LifeBalance Website User" (hereinafter referred to as the User) is a person who has access to the LifeBalance website via the Internet and uses the information, materials and products of the LifeBalance website.</p>
    
                        <p>1.1.7. "Cookies" is a small piece of data sent by the web server and stored on the user's computer, which the web client or web browser sends to the web server in an HTTP request each time when trying to open the page of the corresponding site.</p>
    
                        <p>1.1.8. "IP address" is a unique network address of a node in a computer network through which the User gets access to the Healthy lifestyle Website.</p>
    
                        <h3>2. General provisions</h3>
    
                        <p>2.1. The use of the Life Balance website by the User means acceptance of this Privacy Policy and the terms of processing of the User's personal data.</p>
    
                        <p>2.2. In case of disagreement with the terms of the Privacy Policy, the User must stop using the LifeBalance website.</p>
    
                        <p>2.3. This Privacy Policy applies to the Life Balance website. The Healthy lifestyle Website does not control and is not responsible for third-party websites to which the User can click on links available on the LifeBalance website.</p>
    
                        <p>2.4. The Administration does not verify the accuracy of the personal data provided by the User.</p>
    
                        <h3>3. Subject of the Privacy Policy</h3>
    
                        <p>3.1. This Privacy Policy establishes the obligations of the Administration for non-disclosure and ensuring the confidentiality of personal data that the User provides at the request of the Administration when registering on the LifeBalance website or when subscribing to an informational e-mail newsletter.</p>
    
                        <p>3.2. The personal data authorized for processing under this Privacy Policy is provided by the User by filling out forms on the LifeBalance website and includes the following information:</p>
                        <h6><u>3.2.1. the User's surname, first name, patronymic;</u></h6>
                        <h6><u>3.2.2. User's contact phone number;</u></h6>
                        <h6><u>3.2.3. e-mail address (e-mail);</u></h6>
                        <h6><u>3.2.4. the User's place of residence (if necessary);</u></h6>
                        <h6><u>3.2.5. photo (if necessary);</u></h6>
    
                        <p>3.3. The healthy lifestyle website protects the Data that is automatically transmitted when visiting the pages:</p>
                        <h6><u>- IP address;</u></h6>
                        <h6><u>- information from cookies;</u></h6>
                        <h6><u>- information about the browser;</u></h6>
                        <h6><u>- access time;</u></h6>
                        <h6><u>- referrer (address of the previous page).</u></h6>
    
                        <p>3.3.1. Disabling cookies may result in the inability to access parts of the site that require authorization.</p>
    
                        <p>3.3.2. The healthy lifestyle website collects statistics about the IP addresses of its visitors. This information is used to prevent, identify and solve technical problems.</p>
    
                        <p>3.4. Any other personal information not mentioned above (browsing history, browsers used, operating systems, etc.) is subject to secure storage and non-proliferation, except as provided in clause 5.2. of this Privacy Policy.</p>
    
                        <h3>4. Purposes of collecting user's personal information</h3>
    
                        <p>4.1. The Administration may use the User's personal data for the purposes of:</p>
    
                        <p>4.1.1. Identification of the User registered on the LifeBalance website for his further authorization.</p>
    
                        <p>4.1.2. Providing the User with access to the personalized data of the LifeBalance website.</p>
    
                        <p>4.1.3. Establishing feedback with the User, including sending notifications, requests regarding the use of the LifeBalance website, processing requests and requests from the User.</p>
    
                        <p>4.1.4. Determining the location of the User to ensure security, fraud prevention.</p>
    
                        <p>4.1.5. Confirmation of the authenticity and completeness of the personal data provided by the User.</p>
    
                        <p>4.1.6. Creation of an account for the use of parts of the LifeBalance website, if the User has consented to the creation of an account.</p>
    
                        <p>4.1.7. User notifications by e-mail.</p>
    
                        <p>4.1.8. Providing the User with effective technical support in case of problems related to the use of the LifeBalance website.</p>
    
                        <p>4.1.9. Providing the User with his consent with special offers, newsletters and other information on behalf of the LifeBalance website.</p>
    
                        <h3>5. Methods and terms of processing personal information</h3>
    
                        <p>5.1. The processing of the User's personal data is carried out without time limit, in any legal way, including in personal data information systems using automation tools or without the use of such tools.</p>
    
                        <p>5.2. The User's personal data may be transferred to the authorized state authorities of the Russian Federation only on the grounds and in accordance with the procedure established by the legislation of the Russian Federation.</p>
    
                        <p>5.3. In case of loss or disclosure of personal data, the Administration has the right not to inform the User about the loss or disclosure of personal data.</p>
    
                        <p>5.4. The Administration takes the necessary organizational and technical measures to protect the User's personal information from unauthorized or accidental access, destruction, modification, blocking, copying, distribution, as well as from other illegal actions of third parties.</p>
    
                        <p>5.5. The Administration, together with the User, takes all necessary measures to prevent losses or other negative consequences caused by the loss or disclosure of the User's personal data.</p>
    
                        <h3>6. Rights and obligations of the parties</h3>
    
                        <p>6.1. The User has the right to:</p>
    
                        <p>6.1.1. To make a free decision on the provision of their personal data necessary for the use of the LifeBalance website, and to consent to their processing.</p>
    
                        <p>6.1.2. Update, supplement the provided information about personal data in case of changes in this information.</p>
    
                        <p>6.1.3. The User has the right to receive information from the Administration regarding the processing of his personal data, unless such right is restricted in accordance with federal laws. The User has the right to require the Administration to clarify his personal data, block or destroy them if the personal data is incomplete, outdated, inaccurate, illegally obtained or are not necessary for the stated purpose of processing, as well as to take measures provided by law to protect their rights. To do this, it is enough to notify the Administration at the specified E-mail address.</p>
    
                        <p>6.2. The Administration is obliged to:</p>
    
                        <p>6.2.1. Use the received information exclusively for the purposes specified in clause 4 of this Privacy Policy.</p>
    
                        <p>6.2.2. To ensure the storage of confidential information in secret, not to disclose without the prior written permission of the User, as well as not to sell, exchange, publish, or disclose in other possible ways the transferred personal data of the User, except for clause 5.2. of this Privacy Policy.</p>
    
                        <p>6.2.3. Take precautions to protect the confidentiality of the User's personal data in accordance with the procedure usually used to protect this kind of information in the existing business turnover.</p>
    
                        <p>6.2.4. To block personal data related to the relevant User from the moment of the User's request or request, or his legal representative or the authorized body for the protection of the rights of personal data subjects for the period of verification, in case of identification of false personal data or illegal actions.</p>
    
                        <h3>Responsibility of the parties</h3>
    
                        <p>7.1. The Administration, which has not fulfilled its obligations, is liable for losses incurred by the User in connection with the misuse of personal data, in accordance with the legislation of the Russian Federation, except for the cases provided for in paragraphs 5.2. and 7.2. of this Privacy Policy.</p>
    
                        <p>7.2. In case of loss or disclosure of Confidential Information, the Administration is not responsible if this confidential information:</p>
                        <h6><u>7.2.1. Became public domain before its loss or disclosure.</u></h6>
                        <h6><u>7.2.2. It was received from a third party before it was received by the Resource Administration.</u></h6>
                        <h6><u>7.2.3. Was disclosed with the consent of the User.</u></h6>
    
                        <p>7.3. The User is fully responsible for compliance with the requirements of the legislation of the Russian Federation, including the laws on advertising, on the protection of copyright and related rights, on the protection of trademarks and service marks, but not limited to the above, including full responsibility for the content and form of materials.</p>
    
                        <p>7.4. The User acknowledges that the responsibility for any information (including, but not limited to: data files, texts, etc.) to which he may have access as part of the LifeBalance website is borne by the person who provided such information.</p>
    
                        <p>7.5. The User agrees that the information provided to him as part of the LifeBalance website may be an object of intellectual property, the rights to which are protected and belong to other Users, partners or advertisers who post such information on the LifeBalance website.The User does not have the right to make changes, lease, loan, sell, distribute or create derivative works based on such Content (in whole or in part), except in cases when such actions were expressly authorized in writing by the owners of such Content in accordance with the terms of a separate agreement.</p>
    
                        <p>7.6. In relation to text materials (articles, publications that are freely available on the LifeBalance website), their distribution is allowed, provided that a link to the healthy lifestyle Website is given.</p>
    
                        <p>7.7. The Administration is not liable to the User for any loss or damage incurred by the User as a result of the deletion, failure or inability to save any Content and other communication data contained on the LifeBalance website or transmitted through it.</p>
    
                        <p>7.8. The Administration is not responsible for any direct or indirect losses that occurred due to: the use or inability to use the site or individual services; unauthorized access to User communications; statements or behavior of any third party on the site.</p>
    
                        <p>7.9. The Administration is not responsible for any information posted by the user on the LifeBalance website, including, but not limited to: copyrighted information without the express consent of the copyright owner.</p>
    
                        <h3>8. Dispute Resolution</h3>
    
                        <p>8.1. Before applying to the court with a claim for disputes arising from the relationship between the User and the Administration, it is mandatory to submit a claim (a written proposal or an electronic proposal for a voluntary settlement of the dispute).</p>
    
                        <p>8.2. The recipient of the claim within 30 calendar days from the date of receipt of the claim, notifies the applicant of the claim in writing or electronically about the results of consideration of the claim.</p>
    
                        <p>8.3. If no agreement is reached, the dispute will be referred to the Los Angeles Arbitration Court.</p>
    
                        <p>8.4. The current legislation of the Russian Federation applies to this Privacy Policy and the relations between the User and the Administration.</p>
    
                        <h3>9. Additional conditions</h3>
    
                        <p>9.1. The Administration has the right to make changes to this Privacy Policy without the User's consent.</p>
    
                        <p>9.2. The new Privacy Policy comes into force from the moment it is posted on the Life Balance website, unless otherwise provided by the new version of the Privacy Policy.</p>
    
                        <p>9.3. All suggestions or questions regarding this Privacy Policy should be reported to: lifebalance@gmail.com</p>
    
                        <p>9.4. The current Privacy Policy is posted on the page at http://lifebalance.net/politika.html</p>
    
                        <h4><u>Updated: July 18, 2023</u></h4>
    
                        <h5>G. Los Angeles, I.K.A</h5>
    
                    </div>
    
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

                        <h6><a href="../index.php#advices">Advices</a></h6>
                        <h6><a href="../index.php#exercises">Exercises</a></h6>
                        <h6><a href="../index.php#proper-nutrition">Proper nutrition</a></h6>
                        <h6><a href="../index.php">Motivation</a></h6>

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