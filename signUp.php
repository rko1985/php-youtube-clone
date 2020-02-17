<?php 
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");

if(isset($_POST['submitButton'])){
    $firstName =  FormSanitizer::sanitizeFormString($_POST['firstName']);
    $lastName =  FormSanitizer::sanitizeFormString($_POST['lastName']);

    $username =  FormSanitizer::sanitizeFormUsername($_POST['username']);

    $email =  FormSanitizer::sanitizeFormEmail($_POST['email']);
    $email2 =  FormSanitizer::sanitizeFormEmail($_POST['email2']);

    $password =  FormSanitizer::sanitizeFormPassword($_POST['password']);
    $password2 =  FormSanitizer::sanitizeFormPassword($_POST['password2']);

    echo $firstName . "\n";
    echo $lastName . "\n";
    echo $email . "\n";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>php Youtube Clone</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/images/icons/VideoTubeLogo.png" title="logo"  alt="Site logo">
                <h3>Sign Up</h3>
                <span>to continue to VideoTube</span>
            </div>
            <div class="loginForm">
                <form action="signUp.php" method="POST">
                    <input type="text" name="firstName" placeholder="First Name" autocomplete="off" required>
                    <input type="text" name="lastName" placeholder="Last Name" autocomplete="off" required>
                    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                    <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                    <input type="email" name="email2" placeholder="Confirm email" autocomplete="off" required>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                    <input type="password" name="password2" placeholder="Confirm password" autocomplete="off" required>
                    <input type="submit" name="submitButton" value="Submit">
                </form>
            </div>
            <a class="signInMessage" href="signIn.php">Already have an account? Sign in here!</a>
        </div>
    </div>

</body>
</html>