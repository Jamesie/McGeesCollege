<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = 'about';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: url(Images/collegeCampus.png)">
        <div class="hero-text">
            <h1>About Us</h1>
        </div>
    </div>
    <div class="about_background">
        <div class="adjust_container">
            <div class="about_us_title">
                <h1>About us</h1>
                <h2>We Are The Biggest, Bestest, Amazingest College In The World</h2>
                <img src = "Images/only_logo.png" alt = "logo">
            </div>
            <div class="about_us_text">
                <p>At McGee's College, we are pioneers in the digital age, specializing in cutting-edge digital technologies. Our mission is to equip students with the skills and knowledge needed to excel in the rapidly evolving digital landscape. With a focus on innovation and practical application, we prepare our students to thrive in the tech-driven world, empowering them to shape the future of digital technology.</p>
                <a class = "square_button" href = "Index.php">Read More</a>
            </div>
        </div>
    </div>
    <div class="blue_background">
        <div class="max_width">
            <div class="about_info_container">
                <img src = "Images/lightbulb.png" alt = "lightbulb">
                <h1>Education</h1>
                <div class="about_information_text">
                    <p>Our education is exceptional, providing students with a transformative learning experience.</p>
                </div>
                <a class = "square_button" href = "Index.php">Read More</a>
            </div>
            <div class="vertical_seperator"></div>
            <div class="about_info_container">
                <img src = "Images/hat.png" alt = "lightbulb">
                <h1>Affordability</h1>
                <div class="about_information_text">
                    <p>Our financial aid program makes our courses affordable for all.</p>
                </div>                
                <a class = "square_button" href = "Index.php">Read More</a>
            </div>
            <div class="vertical_seperator"></div>
            <div class="about_info_container">
                <img src = "Images/Network.png" alt = "lightbulb">
                <h1>Online Learning</h1>
                <div class="about_information_text">
                    <p>We offer flexibility of anytime, anywhere access to course materials, engaging interactive content, and dedicated support.</p>
                </div>
                <a class = "square_button" href = "Index.php">Read More</a>
            </div>
        </div>
    </div>
    <div class="about_stats_background">
        <img src = "Images/college_campus_image.png" alt = "collegeCampusImage">
        <div class="stats_container">
            <div class="stats">
                <h1>2023</h1>
                <p>Opened In</p>
            </div>
            <div class="stats">
                <h1>1000</h1>
                <p>Students</p>
            </div>
            <div class="stats">
                <h1>100%</h1>
                <p>Graduation Rate</p>
            </div>
            <div class="stats">
                <h1>100</h1>
                <p>Staff</p>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>
