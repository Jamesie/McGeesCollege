<?php
session_start();


if (isset($_POST["submit_course"])) {

    $course = $_POST["course_variable"];
    $studentID = $_SESSION["studentID"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (isUserLoggedIn() == false ) {
        header("location: ../$course.php?error=notloggedin");
        exit();
    }

    addCourse($conn, $studentID, $course);
}
else {
    header("location: ../courses.php");
    exit();
}