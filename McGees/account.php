<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/account.css">
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
    include_once "Includes/functions.inc.php";
    include_once "Includes/dbh.inc.php";
    $courseName = getStudentCourse($conn, $_SESSION["studentID"]);
    ?>
    <div class="course_header_background">
        <div class="account_header_content_container">
            <?php
                $studentName = getStudentName($conn, $_SESSION["studentID"]);
                echo "<h1>Welcome, $studentName!</h1>";
            ?>
        </div>
    </div>
    <div style = "background-color: var(--clr-body);" class="page_title_background">
        <h1 class="page_title">
            Enrolled Course
        </h1>
        <div class="header_seperator_container">
            <div class="seperator"></div>
        </div>
    </div>
    <div class="enrolled_course_wrapper">
        <div class="enrolled_course_container">
            <?php
                $courseImage = getCourseImage($conn, $courseName);
                echo "
                <img src= $courseImage alt='$courseImage'>
                <div class='center_course_title'>
                    <h1>$courseName</h1>
                </div>";
            ?>
            <div class="progress_wrapper">
                <div class="progress_container">
                    <div class="progress_background"></div>
                    <h2>20%</h2>
                </div>
            </div>
            <div class="tutor_wrapper">
                <?php
                    $courseTutor = getCourseTutor($conn, $courseName);
                    echo "<h3>$courseTutor</h3>";
                ?>
                <i class="fa-regular fa-circle-user fa-xl"></i>
                <div class="vertical_seperator"></div>
                <p>Last update: Nov 30 2023</p>
            </div>
            <div class="center_stupid_button">
                <a class = "square_button" href = "Index.php">Continue</a>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>