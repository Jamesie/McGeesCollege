<?php

function emptyInputSignup($email, $pwd, $pwdRepeat) {
    $result = null;

    if (empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidPassword($pwd) {
    $result = null;
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}   

function pwdMatch($pwd, $pwdRepeat) {
    $result = null;

    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailUsed($conn, $email) {
    $sql = "SELECT * FROM students Where Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $email, $pwd, $phoneNumber, $nokNumber, $postCode) {
    $sql = "INSERT INTO students (FirstName, LastName, Email, Password, PhoneNumber, NoKPhoneNumber, PostCode) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $email, $hashedPwd, $phoneNumber, $nokNumber, $postCode);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
    
}

function emptyInputLogin($email, $pwd) {
    $result = null;

    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd) {
    $emailExists = emailUsed($conn, $email);

    if ($emailExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["Password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();        
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["studentID"] = $emailExists["StudentID"];
        $_SESSION["email"] = $emailExists["Email"];
        header("location: ../index.php?error=none");
        exit();
    }
}

function emptyInputDetails($firstName, $lastName, $phoneNumber, $nokNumber, $postCode) {
    $result = null;

    if (empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($nokNumber) || empty($postCode)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function isUserLoggedIn() {
    session_start();
    $result = null;

    if (isset($_SESSION["studentID"])) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function addCourse($conn, $studentID, $courseVariable) {
    $sql = "UPDATE students SET CourseEnrolled = ? WHERE StudentID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $courseVariable, $studentID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if (isset($_SESSION["studentID"])) {
        header("location: ../index.php?error=none");
        exit();
    }
    else {
        header("location: ../index.php?error=notloggedin");
        exit();
    }
}

function getCourseDescription($conn, $courseName) {
    $sql = "SELECT CourseDescription FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseDescription);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseDescription;
}

function getCourseLO($conn, $courseName) {
    $sql = "SELECT LearningObjectives FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $learningObjectives);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $learningObjectives;
}

function getCourseLevel($conn, $courseName) {
    $sql = "SELECT Level FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseLevel);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseLevel;
}

function getCourseDuration($conn, $courseName) {
    $sql = "SELECT Duration FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseDuration);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseDuration;
}

function getCourseLanguage($conn, $courseName) {
    $sql = "SELECT Language FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseLanguage);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseLanguage;
}

function getCourseImage($conn, $courseName) {
    $sql = "SELECT CourseImageURL FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseImage);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseImage;
}

function getCourseTitle($conn, $courseName) {
    $sql = "SELECT CourseTitle FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseTitle);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseTitle;
}

function getCoursePrice($conn, $courseName) {
    $sql = "SELECT CoursePrice FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $CoursePrice);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $CoursePrice;
}

function getStudentName($conn, $studentID) {
    $sql = "SELECT FirstName FROM students WHERE StudentID = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $studentID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $name;
}

function getCourseTutor($conn, $courseName) {
    $sql = "SELECT Tutor FROM courses WHERE CourseName = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $courseName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $CourseTutor);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $CourseTutor;
}

function getStudentCourse($conn, $studentID) {
    $sql = "SELECT CourseEnrolled FROM students WHERE StudentID = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $studentID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $courseName);
    
        mysqli_stmt_fetch($stmt);
    
        mysqli_stmt_close($stmt);
    }
    return $courseName;
}