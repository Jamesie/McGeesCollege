<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/course.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = "gcse";
    include_once "header.php";
    ?>
    <div class="hero" style = "background-image: url(Images/course_header.png)">
        <div class="hero-text">
            <h1>GCSE's</h1>
        </div>
    </div>
    <div class="adjust_container">
        <div class="course_level_title_container">
            <div class="line"></div>
            <h1> GCSE's </h1>
        </div>
    </div>
    <div class="adjust_container">
        <div class="course_display_container">
            <div class="course_display_wrapper">
                <img class = "course_display_image" src = "Images/maths.png" alt = "A-Level Business Image">
                <div class="course_name">
                    <h2>
                        GCSE Maths
                    </h2>
                    <div class="line"></div>
                    <p>From £x/month <br>
                        or <br>
                        from £x full
                    </p>
                    <div class="line"></div>
                    <a href="math.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="course_display_wrapper">
                <img class = "course_display_image" src = "Images/English.png" alt = "A-Level Business Image">
                <div class="course_name">
                    <h2>
                        GCSE English
                    </h2>
                    <div class="line"></div>
                    <p>From £x/month <br>
                        or <br>
                        from £x full
                    </p>
                    <div class="line"></div>
                    <a href="english.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="course_display_wrapper">
                <img class = "course_display_image" src = "Images/computerScience.png" alt = "A-Level Business Image">
                <div class="course_name">
                    <h2>
                        GCSE Computer Science
                    </h2>
                    <div class="line"></div>
                    <p>From £x/month <br>
                        or <br>
                        from £x full
                    </p>
                    <div class="line"></div>
                    <a href="computerscience.php" class = "square_button">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="course_level_title_container"></div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>
