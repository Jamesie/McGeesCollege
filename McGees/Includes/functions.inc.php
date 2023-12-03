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
    $sql = "SELECT * FROM Students Where Email = ?;";
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