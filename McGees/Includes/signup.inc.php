<?php

if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
    
    if (emptyInputSignup($email, $pwd, $pwdRepeat) !== false ) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidPassword($pwd) !== false ) {
        header("location: ../signup.php?error=invalidpassword");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false ) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    if (emailUsed($conn, $email) !== false ) {
        header("location: ../signup.php?error=emailtaken");
        exit();
    }

    createUser($conn, $email, $pwd); 
}

else {
    header("location: ../signup.php");
    exit();
}