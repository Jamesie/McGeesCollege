<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = 'news';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(Images/news_header.png)">
        <div class="hero-text">
            <h1>News</h1>
        </div>
    </div>
    <div class="page_title_background">
        <h1 class="page_title">
            Trending News
        </h1>
        <div class="header_seperator_container">
            <div class="seperator"></div>
        </div>
    </div>
    <div class="trending_news_background">
        <div class="add_max_width">
            <div class="trending_news_container">
                <img src = "Images/trending_news_1.png">
                <p>Using leather footballs on a school playground is made illegal by 'absurd' council order</p>
            </div>
            <div class="trending_news_container">
                <img src = "Images/trending_news_2.png">
                <p>Scotland's school strike misery could continue as union chiefs dismiss pay offer as 'too little, too late'</p>
            </div>
        </div>
    </div>
    <div class="football_background">
        <div class="news_max_width">
            <div class="header_news_text">
                <div class="line"></div>
                <h1>
                    News Related to McGees
                </h1>
            </div>
            <div class="full_section">
                <div class="news_section">
                    <img src = "Images/football.png">
                    <div class="news_seperator"></div>
                    <h1>McGee’s Football Tournament </h1>
                    <p>At McGee's College, the spirit of competition and camaraderie comes alive on the field during our thrilling college football matches. The energy is electric as students, faculty, and supporters gather to witness our talented athletes showcase their dedication, skill, and teamwork. With each pass, tackle, and touchdown, our football matches not only entertain but also serve as a symbol of unity and sportsmanship within our college community. Whether under the radiant sun or the stadium lights, our college football matches embody the values of excellence, determination, and pride that define our institution. It's not just a game; it's a source of pride and a cherished tradition at McGee's College, where we come together to celebrate the heart and soul of college athletics.</p>
                </div>
                <div class="news_section">
                <img src = "Images/collegeCampus.png">
                    <div class="news_seperator"></div>
                    <h1>Open Evening </h1>
                    <p>Step into the world of possibilities at McGee's College Open Evening! Join us for an immersive experience where the spirit of learning comes to life. Explore our state-of-the-art facilities, meet our esteemed faculty, and discover the diverse array of academic programs we offer. Whether you're a prospective student, a curious parent, or an aspiring professional seeking to enhance your skills, our Open Evening is your gateway to understanding the unparalleled educational opportunities at McGee's</p>
                </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>