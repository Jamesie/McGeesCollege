<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/course.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = 'courses';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: url(Images/course_header.png)">
        <div class="hero-text">
            <h1>Courses</h1>
        </div>
    </div>
    <div class="adjust_container">
        <div class="course_level_title_container">
            <div class="line"></div>
            <h1> A-Levels </h1>
        </div>
    </div>
    <div class="adjust_container">
        <div class="course_display_container">
            <div class="course_display_wrapper">
                <img class = "course_display_image" src = "Images/business.png" alt = "A-Level Business Image">
                <div class="course_name">
                    <h2>
                        A-Level Business
                    </h2>
                    <div class="line"></div>
                    <p>From £x/month <br>
                        or <br>
                        from £x full
                    </p>
                    <div class="line"></div>
                    <a href="business.html" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="course_display_wrapper">
                <img class = "course_display_image" src = "Images/Digital.png" alt = "A-Level Business Image">
                <div class="course_name">
                    <h2>
                        A-Level Digital
                    </h2>
                    <div class="line"></div>
                    <p>From £x/month <br>
                        or <br>
                        from £x full
                    </p>
                    <div class="line"></div>
                    <a href="digital.html" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="course_display_wrapper">
                <img class = "course_display_image" src = "Images/languages.png" alt = "A-Level Business Image">
                <div class="course_name">
                    <h2>
                        A-Level Languages
                    </h2>
                    <div class="line"></div>
                    <p>From £x/month <br>
                        or <br>
                        from £x full
                    </p>
                    <div class="line"></div>
                    <a href="languages.html" class = "square_button">Read More</a>
                </div>
            </div>
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
                    <a href="math.html" class = "square_button">Read More</a>
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
                    <a href="english.html" class = "square_button">Read More</a>
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
                    <a href="computerscience.html" class = "square_button">Read More</a>
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
