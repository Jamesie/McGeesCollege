<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/details.css">
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
                <h1>Student Information</h1>
            </div>
            <form action="includes/details.inc.php" method="post">
                <div class="text_field_container_signup">
                    <input type="hidden" name = "email" value = "<?php echo $_SESSION['email']; ?>">
                    <input type="hidden" name = "pwd" value = "<?php echo $_SESSION['pwd']; ?>">
                    <input type="text" name = "firstName" placeholder= "First Name">
                    <input type="text" name = "lastName" placeholder= "Last Name">
                    <input type="text" name = "phoneNumber" placeholder= "Phone Number">
                    <input type="text" name = "nokNumber" placeholder= "Next of Kin Phone Number">
                    <input type="text" name = "postCode" placeholder= "Post Code">
                </div>
                <div class="error_message_container">
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill all fields</p>";
                            }
                        }
                    ?>
                </div>
                <div class="signin_button">
                    <button type = "submit" name = "submit" class = "square_button">Continue</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>