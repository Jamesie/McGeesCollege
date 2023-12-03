<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = 'home';
    include_once "header.php";
    ?>
    <div class="hero" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(Images/homeHeaderImage.png)">
        <p>
            Distance learning, or online learning, is an alternative route to studying a degree with a university in the UK, and gives your studies more flexibility, which may suit your circumstances.
        </p>
        <a href="courses.php" class = "square_button">Courses</a>
    </div>

    <div class="welcome_wrapper">
        <div class="welcome_text_container">
            <div class="header_text">
                <div class="line"></div>
                <h1>
                    Welcome to McGee's
                </h1>
            </div>
            <p> Welcome to McGee's Online College, where your journey into the dynamic world of Information Technology begins. At McGee's, we're committed to providing you with a cutting-edge education tailored to the ever-evolving IT landscape. Whether you're an aspiring coder, network engineer, cybersecurity specialist, or tech enthusiast, our comprehensive programs and expert faculty are here to equip you with the skills and knowledge needed to thrive in the digital age. With a supportive online community, hands-on learning experiences, and a passion for innovation, McGee's Online IT College is your gateway to a successful and rewarding IT career. Join us in shaping the future of technology and explore the limitless possibilities that await you here. Welcome to the future of IT education </div>
        <div class="welcome_image_container">
            <img src="Images/collegeCampus.png" alt="college campus">
        </div>
    </div>
    <div class="home_course_header">
        <h1>
            Courses
        </h1>
        <div class="line"></div>
    </div>
    <div class="adjust_container">
        <div class="home_course_container">
            <div class="home_course_wrapper">
                <div class="course_image">
                    <img src = "Images/business.png" alt = "A-Level Business Image">
                </div>
                <div class="home_course_text">
                    <h2>
                        A-Level Business
                    </h2>
                    <a href="business.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="home_course_wrapper">
                <div class="course_image">
                    <img src = "Images/Digital.png" alt = "A-Level Digital Image">
                </div>
                <div class="home_course_text">
                    <h2>
                        A-Level Digital
                    </h2>
                    <a href="digital.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="home_course_wrapper">
                <div class="course_image">
                    <img src = "Images/languages.png" alt = "A-Level Languages Image">
                </div>
                <div class="home_course_text">
                    <h2>
                        A-Level Languages
                    </h2>
                    <a href="languages.php" class = "square_button">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="adjust_container">
        <div class="home_course_container">
            <div class="home_course_wrapper">
                <div class="course_image">
                    <img src = "Images/maths.png" alt = "GCSE Maths Image">
                </div>
                <div class="home_course_text">
                    <h2>
                        GCSE Maths
                    </h2>
                    <a href="math.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="home_course_wrapper">
                <div class="course_image">
                    <img src = "Images/english.png" alt = "GCSE English Image">
                </div>
                <div class="home_course_text">
                    <h2>
                        GCSE English
                    </h2>
                    <a href="english.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="home_course_wrapper">
                <div class="course_image">
                    <img src = "Images/computerScience.png" alt = "GCSE Computer Science Image">
                </div>
                <div class="home_course_text">
                    <h2>
                        GCSE Computer Science
                    </h2>
                    <a href="computerscience.php" class = "square_button">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="view_courses_container">
        <a href="courses.php" class = "square_button">Browse all courses</a>
    </div>
    <div class="qualification_title">
        <h1>Complete your qualification online!</h1>
    </div>
    <div class="adjust_qualification_wrapper">
        <div class="qualification_wrapper">
            <div class="qualification_container">
                <div class="qualification_image_container">
                    <img class = "qualification_image" src = "Images/hat.png" alt = "">
                </div>
                <h1>Innovative Teaching Methods</h1>
                <p>Online education encourages the use of innovative teaching methods, such as multimedia presentations, online simulations, and virtual labs, which can enhance the learning experience.</p>
            </div>
            <div class="qualification_container">
                <div class="qualification_image_container">
                    <img class = "qualification_image" src = "Images/arrows.png" alt = "">
                </div>
                <h1>Flexibility & how online works</h1>
                <p>Online college programs often allow students to schedule their coursework around their existing commitments, such as work or family responsibilities. This flexibility can make higher education more accessible to a broader range of individuals.</p>
            </div>
            <div class="qualification_container">
                <div class="qualification_image_container">
                    <img class = "qualification_image" src = "Images/book.png" alt = "">
                </div>
                <h1>Diverse Course Offerings</h1>
                <p>Online colleges often offer a wide range of courses and degree programs, allowing students to pursue their academic and career interests more easily.</p>
            </div>
        </div>
    </div>
    <div class="qualification_title">
        <a href="about.php" class = "square_button">About McGees</a>
    </div>
    <div class="home_course_header"></div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>