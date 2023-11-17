<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/32031fa038.js" crossorigin="anonymous"></script></head>
<body>
    <div class="header">
        <div class="header_link_container">
            <ul class="header_menu">
                <li class="header_item">
                    <a href="students.html" class="header_link underline_link">Students</a>
                </li>
                <li class="header_item">
                    <a href="staff.html" class="header_link underline_link">Staff</a>
                </li>
                <li class="header_item">
                    <a href="qualifications.html" class="header_link underline_link">Qualifications</a>
                </li>
                <li class="header_item">
                    <a href="news.html" class="header_link underline_link">News</a>
                </li>
            </ul>
        </div>
        <div class="logo_container">
            <a href = "Index.html">
                <img src="Images/logo.png" alt="Logo" class="logo">
            </a>
        </div>
        <div class="search_container">
            <input class = "text_field" type="text" placeholder="Search..." >

            <?php
            if (isset($SESSION["Email"])) {
                echo "<a class = 'profile_link' href = 'account.php'><i class = 'fa-solid fa-user fa-lg'></i></a>";
            }
            else {
                echo "<a class = 'profile_link' href = 'login.php'><i class = 'fa-solid fa-user fa-lg'></i></a>";
            }
            ?>
            
        </i>
        </div>
    </div>
    <nav class="navbar">
        <div class="navbar_link_container">
            <ul class="navbar_menu">
                <li class="navbar_item">
                    <a href="courses.html" class="navbar_link underline_link">Courses</a>
                </li>
                <li class="header_item">
                    <a href="gcse.html" class="navbar_link underline_link">GCSE's</a>
                </li>
                <li class="header_item">
                    <a href="help.html" class="navbar_link underline_link">Help & Support</a>
                </li>
                <li class="header_item">
                    <a href="about.html" class="navbar_link underline_link">About</a>
                </li>
            </ul>
        </div>
    </nav>
</body>