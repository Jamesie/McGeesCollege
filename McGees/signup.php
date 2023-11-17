<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login_header">
        <a href = "Index.html">
            <img src= "Images/logo.png" alt = "logo">
        </a>
    </div>
    <div class="login_wrapper">
        <div class="login_card">
            <div class="login_title">
                <h1>Sign Up</h1>
            </div>
            <form action="includes/signup.inc.php" method="post">
                <div class="text_field_container_signup">
                    <input type="email" name = "email" placeholder= "Email">
                    <input type="password" name = "pwd" placeholder= "Password">
                    <input type="password" name = "pwdrepeat" placeholder= "Confirm Password">
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill all fields</p>";
                    }
                    if ($_GET["error"] == "invalidpassword") {
                        echo "<p>Password must have uppercase, lowercase, number and symbol</p>";
                    }
                    if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<p>Passwords don't match</p>";
                    }
                    if ($_GET["error"] == "emailtaken") {
                        echo "<p>This email already has an account</p>";
                    }
                    if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong</p>";
                    }
                }
                ?>
                <div class="signin_button">
                    <button type = "submit" name = "submit" class = "square_button">Sign In</button>
                </div>
            </form>

            <div class="create_account_link_container">
                <p>Already have an account?</p>
                <a href = "login.php" class = "create_account_link">Sign In</a>
            </div>
        </div>
    </div>
</body>
</html>