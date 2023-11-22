<?php
session_start();


if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $nokNumber = $_POST["nokNumber"];
    $postCode = $_POST["postCode"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    emptyInputDetails($firstName, $lastName, $phoneNumber, $nokNumber, $postCode);

    if (emptyInputDetails($firstName, $lastName, $phoneNumber, $nokNumber, $postCode) !== false ) {
        header("location: ../studentdetails.php?error=emptyinput");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $pwd, $phoneNumber, $nokNumber, $postCode);
}