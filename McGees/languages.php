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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $currentPage = 'home';
    include_once "header.php";
    ?>
    <div class="course_header_background">
        <div class="course_header_sizing">
            <div class="course_header_text">
                <div class="course_header_name">
                    <p>Languages</p>
                </div>
                <div class="course_title">
                    <h1>Become a Linguist | Learn 
                        the Skills & Get a Job</h1>
                </div>
            </div>
            <div class="sticky_wrapper">
                <div class="sticky_course_container">
                    <img src="Images/Languages_course.webp" alt="Languages">
                    <h1>£500.00</h1>
                    <div class="center_sticky_content">
                        <div class="sticky_info">
                            <div class="sticky_icon_holder">
                                <i class="fa-solid fa-sitemap fa-lg"></i>
                            </div>
                            <div class="sticky_icon_text">
                                <p>Level</p>
                            </div>
                            <div class="sticky_value">
                                <p>A-Level</p>
                            </div>
                        </div>
                        <div class="sticky_info">
                            <div class="sticky_icon_holder">
                                <i class="fa-regular fa-clock fa-lg"></i>                            
                            </div>
                            <div class="sticky_icon_text">
                                <p>Duration</p>
                            </div>
                            <div class="sticky_value">
                                <p>2-Years</p>
                            </div>
                        </div>
                        <div class="sticky_info">
                            <div class="sticky_icon_holder">
                                <i class="fa-solid fa-tags fa-lg"></i>                            
                            </div>
                            <div class="sticky_icon_text">
                                <p>Subject</p>
                            </div>
                            <div class="sticky_value">
                                <p>Languages</p>
                            </div>
                        </div>
                        <div class="sticky_info">
                            <div class="sticky_icon_holder">
                                <i class="fa-solid fa-globe fa-lg"></i>                            
                            </div>
                            <div class="sticky_icon_text">
                                <p>Language</p>
                            </div>
                            <div class="sticky_value">
                                <p>English</p>
                            </div>
                        </div>
                        <a href="courses.php" class = "square_button"><i class="fa-solid fa-cart-shopping fa-lg"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course_content">
        <div class="about_course_title">
            <div class="line"></div>
            <h1>
                About this Course
            </h1>
        </div>
        <div class="about_course_description">
            <p>This online A-level course in Languages offers students the opportunity to study and develop proficiency in a foreign language. The course covers language comprehension, speaking, reading, and writing skills, as well as cultural aspects of the language's origin. Students will gain the ability to communicate effectively in the chosen language and gain insight into the culture and traditions associated with it.
            </p>
        </div>
        <div class="learning_obj_container">
            <h1>Learning Objectives</h1>
            <p>Language Proficiency: Achieve fluency in speaking, writing, and understanding the chosen foreign language.
                Reading and Comprehension: Enhance skills in reading and listening comprehension.
                Writing and Grammar: Improve writing abilities and grasp language grammar.
                Speaking and Conversation: Develop conversational skills for effective communication.</p>
        </div>
        <div class="material_included_wrapper">
            <h2>Material Included</h2>
            <div class="line"></div>
        </div>
        <div class="material_contents">
            <div class="material_info">
                <i class="fa-solid fa-arrow-right fa-lg"></i>
                <p>Videos</p>
            </div>
            <div class="material_info">
                <i class="fa-solid fa-arrow-right fa-lg"></i>
                <p>Booklets</p>
            </div>
        </div>
        <div class="material_included_wrapper">
            <h2>Requirements</h2>
            <div class="line"></div>
        </div>
        <div class="material_contents">
            <div class="material_info">
                <i class="fa-solid fa-check fa-lg"></i>
                <p>No pre-requisites, although familiarity with basic Language concepts is helpful</p>
            </div>
            <div class="material_info">
                <i class="fa-solid fa-check fa-lg"></i>
                <p>GCSE Maths Grade 5</p>
            </div>
            <div class="material_info">
                <i class="fa-solid fa-check fa-lg"></i>
                <p>GCSE English Grade 5</p>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>