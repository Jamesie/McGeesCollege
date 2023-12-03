<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/qualification.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <?php
    $currentPage = 'qualifications';
    include_once "header.php"
    ?>
    <div class="hero" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(Images/qualification_header.png)">
        <div class="hero-text">
            <h1>Qualifications</h1>
        </div>
    </div>
    <div class="page_title_background">
        <h1 class="page_title">
            Qualifications (AWS and Cisco)
        </h1>
        <div class="header_seperator_container">
            <div class="seperator"></div>
        </div>
    </div>
    <div class="welcome_wrapper">
        <div class="welcome_text_container">
            <p>AWS (Amazon Web Services) and Cisco are two prominent players in the IT industry, and their certifications can significantly enhance students' prospects of landing a job in the IT sector. AWS certifications validate proficiency in cloud computing, a rapidly growing field crucial for modern businesses. These certifications demonstrate a strong foundation in cloud services, making graduates highly desirable for organizations seeking to leverage the cloud. On the other hand, Cisco certifications focus on networking and cybersecurity, essential skills in today's interconnected world. By attaining Cisco certifications, students prove their expertise in building and securing networks, which are critical for maintaining the integrity and performance of IT infrastructures. Both AWS and Cisco certifications are recognized globally, providing students with a competitive edge and a wide range of job opportunities across various sectors within the IT industry.</div>
        <div class="qualification_badge_container">
            <img src="Images/qualification_badge.png" alt="college campus">
        </div>
    </div>
    <div class="aws_title_container">
        <img src = "Images/aws_image.png" alt = "aws image">
    </div>
    <div class="header_seperator_container">
        <div class="thick_seperator"></div>
    </div>
    <div class="adjust_container">
        <div class="course_display_container">
            <div class="course_display_wrapper">
                <div class="center_qualification_image">
                    <img src = "Images/Cloud.png" alt = "Cloud image">
                </div>
                <div class="aws_title_seperator">
                    <h1>Introduction to Cloud</h1>
                    <div class="thick_seperator"></div>
                </div>
                <div class="center_qualification_button">
                    <a href="courses.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="course_display_wrapper">
                <div class="center_qualification_image">
                    <img src = "Images/Network.png" alt = "Network Image">
                </div>
                
                <div class="aws_title_seperator">
                    <h1>Getting Started With Networking</h1>
                    <div class="thick_seperator"></div>
                </div>
                <div class="center_qualification_button">
                    <a href="courses.php" class = "square_button">Read More</a>
                </div>
            </div>
            <div class="course_display_wrapper">
                <div class="center_qualification_image">
                    <img src = "Images/Security.png" alt = "security image">
                </div>
                <div class="aws_title_seperator">
                    <h1>Getting Started With Security</h1>
                    <div class="thick_seperator"></div>
                </div>
                <div class="center_qualification_button">
                    <a href="courses.php" class = "square_button">Read More</a>
                </div>
            </div>
        </div> 
    </div>
    <div class="cisco_background">
        <div class="aws_title_container">
            <img src = "Images/cisco_image.png" alt = "aws image">
        </div>
        <div class="header_seperator_container">
            <div class="thick_seperator"></div>
        </div>
    </div>
    <div class="adjust_qualification_wrapper">
        <div class="qualification_wrapper">
            <div class="qualification_container">
                <div class="center_image_container">
                    <div class="cisco_image_container">
                        <img src = "Images/hat.png" alt = "hat">
                    </div>
                </div>
                <div class="aws_title_seperator">
                    <h1 class = "cisco_course_title">IT Essentials</h1>
                    <div class="thick_seperator"></div>
                </div>
                <div class="center_qualification_button">
                    <a href="courses.php" class = "square_button transparent">Read More</a>
                </div>            
            </div>
            <div class="qualification_container">
                <div class="center_image_container">
                    <div class="cisco_image_container">
                        <img src = "Images/bug.png" alt = "bug">
                    </div>
                </div>
                <div class="aws_title_seperator">
                    <h1 class = "cisco_course_title">Packet Tracer</h1>
                    <div class="thick_seperator"></div>
                </div>
                <div class="center_qualification_button">
                    <a href="courses.php" class = "square_button transparent">Read More</a>
                </div>            
            </div>
            <div class="qualification_container">
                <div class="center_image_container">
                    <div class="cisco_image_container">
                        <img src = "Images/shield.png" alt = "shield">
                    </div>
                </div>
                <div class="aws_title_seperator">
                    <h1 class = "cisco_course_title">Cyber Security</h1>
                    <div class="thick_seperator"></div>
                </div>
                <div class="center_qualification_button">
                    <a href="courses.php" class = "square_button transparent">Read More</a>
                </div>            
            </div>
        </div>
    </div>
    <div id = "space"></div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>