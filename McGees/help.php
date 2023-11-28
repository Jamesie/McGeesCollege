<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = 'help';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: url(Images/help_header.png)">
        <div class="hero-text">
            <h1>Help & Support</h1>
        </div>
    </div>

    <div class="welcome_wrapper">
        <div class="welcome_text_container">
            <div class="header_text">
                <div class="line"></div>
                <h1>
                    Additional Learning Support
                </h1>
            </div>
            <p> McGee's College is committed to providing comprehensive and additional learning support to ensure the academic success and holistic development of its students. Recognizing that each student possesses unique learning styles and needs, the college offers a range of tailored support services. These services may include one-on-one tutoring sessions, access to supplemental learning resources, workshops on study skills and time management, as well as personalized assistance for students with specific learning challenges. The college strives to create a nurturing and inclusive learning environment where every student can thrive. By offering additional learning support, McGee's College aims to empower students to excel academically, build confidence in their abilities, and foster a lifelong love for learning. </div>
        <div class="welcome_image_container">
            <img src="Images/help_support_image.png" alt="jskdfhisduh">
        </div>
    </div>

    <?php
    include_once "footer.php";
    ?>
</body>
</html>