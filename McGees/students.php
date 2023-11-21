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
    $currentPage = 'students';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: url(Images/students_header.png)">
        <div class="hero-text">
            <h1>Students</h1>
        </div>
    </div>
    <div class="page_title_background">
        <h1 class="page_title">
            Resources, offices and services that support McGees students
        </h1>
        <div class="header_seperator_container">
            <div class="seperator"></div>
        </div>
    </div>
    <div class="latest_news_backrgound">
        <div class="latest_news_title">
            <h1>Latest News</h1>
            <a href = "news.html">view all<i class="fa-solid fa-arrow-right fa-sm"></i></a>
        </div>
        <div class="adjust_container">
            <div class="add_max_width">
                <div class="latest_news_container">
                    <img src = "Images/news_image_1.png">
                    <div class="latest_news_container_title">
                        <div class="line"></div>
                        <h2> UK Politics</h2>
                    </div>
                    <p>Crumbling concrete crisis spreads to housing, shops and offices</p>
                    <div class="read_more_button">
                        <a href="courses.html" class = "square_button">Read More</a>
                    </div>                </div>
                <div class="latest_news_container">
                    <img src = "Images/news_image_2.png">
                    <div class="latest_news_container_title">
                        <div class="line"></div>
                        <h2> News </h2>
                    </div>
                    <p>What is Raac and why is it causing an issue in schools?</p>
                    <div class="read_more_button">
                        <a href="courses.html" class = "square_button">Read More</a>
                    </div>                </div>
                <div class="latest_news_container">
                    <img src = "Images/news_image_3.png">
                    <div class="latest_news_container_title">
                        <div class="line"></div>
                        <h2> Education</h2>
                    </div>
                    <p>Call for urgent clarity on schools’ trans policy after Sunak ‘U-turn’</p>
                    <div class="read_more_button">
                        <a href="courses.html" class = "square_button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="student_resource_background">
        <div class="add_max_width">
            <div class="student_resource_container">
                <img src = "Images/student_resource1.png">
                <h2>Academic Resources</h2>
                <p class = "blah">All of the information about resources available, and skills development options to help you</p>
                <div class="material_contents">
                    <div class="material_info">
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                        <p>Courses</p>
                    </div>
                    <div class="material_info">
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                        <p>Exam Schedule</p>
                    </div>
                    <div class="material_info">
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                        <p>Career Guidance</p>
                    </div>
                </div>
            </div>
            <div class="student_resource_container">
                <img src = "Images/student_resource2.png">
                <h2>Financials</h2>
                <p class = "blah">All of the information about resources available, and skills development options to help you</p>
                <div class="material_contents">
                    <div class="material_info">
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                        <p>Financial Aid</p>
                    </div>
                    <div class="material_info">
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                        <p>Switch Plan</p>
                    </div>
                    <div class="material_info">
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                        <p>Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</html>
