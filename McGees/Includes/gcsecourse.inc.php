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
    include_once "Includes/functions.inc.php";
    include_once "Includes/dbh.inc.php";
    ?>
    <div class="course_header_background">
        <div class="course_header_sizing">
            <div class="course_header_text">
                <div class="course_header_name">
                    <?php
                        echo "<p>$courseName</p>";
                    ?>                
                </div>
                <div class="course_title">
                    <?php
                        $courseTitle = getcourseTitle($conn, $courseName);
                        echo "<h1>$courseTitle</h1>";
                    ?>
                </div>
            </div>
            <div class="sticky_wrapper">
                <div class="sticky_course_container">
                    <?php
                        $coursePrice = getCoursePrice($conn, $courseName);
                        $courseImage = getCourseImage($conn, $courseName);
                            echo "<img src= $courseImage alt='Languages'>";
                            echo "<h1>$coursePrice</h1>";
                    ?>
                    <div class="center_sticky_content">
                        <div class="sticky_info">
                            <div class="sticky_icon_holder">
                                <i class="fa-solid fa-sitemap fa-lg"></i>
                            </div>
                            <div class="sticky_icon_text">
                                <p>Level</p>
                            </div>
                            <div class="sticky_value">
                            <?php
                                $courseLevel = getCourseLevel($conn, $courseName);
                                echo "<p>$courseLevel</p>";
                            ?>
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
                            <?php
                                $courseDuration = getCourseDuration($conn, $courseName);
                                echo "<p>$courseDuration</p>";
                            ?>
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
                            <?php
                                echo "<p>$courseName</p>";
                            ?>
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
                                <?php
                                    $courseLanguage = getCourseLanguage($conn, $courseName);
                                    echo "<p>$courseLanguage</p>";
                                ?>
                            </div>
                        </div>
                        <div class = "add_course_container">
                            <form action="includes/course.inc.php" method="post">
                                <input type="hidden" name="course_variable" value="<?php echo "$courseName" ?>">
                                <button type = "submit" name = "submit_course" class = "square_button"><i class="fa-solid fa-cart-shopping fa-lg"></i>Add to account</button>
                                <?php
                                    if (isset($_GET["error"])) {
                                        if ($_GET["error"] == "notloggedin") {
                                            echo "<p>Must log in</p>";
                                        }
                                    }
                                ?>
                            </form>
                        </div>                    
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
            <?php
                $courseDescription = getCourseDescription($conn, $courseName);
                echo "<p>$courseDescription</p>";
            ?>
        </div>
        <div class="learning_obj_container">
            <h1>Learning Objectives</h1>
            <?php
                $learningObjectives = getCourseLO($conn, $courseName);
                echo "<p>$learningObjectives</p>";
            ?>
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
                <p>No pre-requisites, although familiarity with basic concepts is helpful</p>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>