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
    $currentPage = 'staff';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: url(Images/staff_header.png)">
        <div class="hero-text">
            <h1>Staff</h1>
        </div>
    </div>
    <div class="page_title_background">
        <h1 class="page_title">
            Staff Benefits For Working At McGee’s College
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
    <div class="welcome_wrapper">
        <div class="welcome_text_container">
            <div class="header_text">
                <div class="line"></div>
                <h1>
                    Staff Benefits
                </h1>
            </div>
            <p> Working at McGee's Online College comes with a range of staff benefits designed to support and reward our dedicated team. These benefits may include competitive salaries, comprehensive health and dental insurance, retirement plans, professional development opportunities, flexible work arrangements, and a supportive, innovative work environment that fosters growth and collaboration. Additionally, as part of our commitment to higher education, our staff may have access to tuition reimbursement or discounted educational opportunities to further their own learning and career development. We believe that investing in our staff's well-being and professional growth is essential to the success of our institution. </div>
        <div class="welcome_image_container">
            <img src="Images/student_resource1.png" alt="college campus">
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>
