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
        <a href = "Index.php">
            <img src= "Images/logo.png" alt = "logo">
        </a>
    </div>
    <div class="login_wrapper">
        <div class="login_card">
            <div class="login_title">
                <h1>Sign In</h1>
            </div>
            <form action="includes/login.inc.php" method="post">
                <div class="text_field_container">
                    <input type="email" name = "email" placeholder= "Email">
                    <input type="password" name = "pwd" placeholder= "Password">
                </div>
                <div class="forgot_password">
                    <a href = "Index.html">Forgot Password?</a>
                </div>
                <div class="error_message_container">
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill all fields</p>";
                        }
                        if ($_GET["error"] == "invalidpassword") {
                            echo "<p>Wrong Password</p>";
                        }
                        if ($_GET["error"] == "wronglogin") {
                            echo "<p>Incorrect Credentials</p>";
                        }
                        if ($_GET["error"] == "stmtfailed") {
                            echo "<p>Something went wrong</p>";
                        }
                    }
                    ?>
                </div>
                <div class="signin_button">
                    <button type = "submit" name = "submit" class = "square_button">Sign In</a>
                </div>
            </form>
            <div class="create_account_link_container">
                <p>Don't have an account?</p>
                <a href = "signup.php" class = "create_account_link">Create account</a>
            </div>
        </div>
    </div>
</body>
</html>