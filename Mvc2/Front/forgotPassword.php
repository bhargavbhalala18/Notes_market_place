<?php
include 'db_connect.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$email_error = false;
$mail_sent = false;

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $email_count = mysqli_num_rows(mysqli_query($conn, " SELECT * FROM users where email_id='$email' "));

    if ($email_count) {

        // Generate System password
        $pass = "abcdefghijkXYZGHKLstuvwxyz1234567890!@#$%^&*(){}[]_+-<>/\|?";
        $system_pass = substr(str_shuffle($pass), 0, 8);

        // PHP mail function
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->Username = "bhargavbhalala4321@gmail.com";
            $mail->Password = 'bhargav@Main123';
            // Sender and recipient settings
            $mail->setFrom("bhargavbhalala4321@gmail.com", 'NotesMarketPlace');
            $mail->addAddress($email);
            $mail->addReplyTo("bhargavbhalala4321@gmail.com", 'NotesMarketPlace');
            $mail->IsHTML(true);
            $mail->Subject = "New Temporary Password has been created for you";
            $mail->Body = "<p>Hello.<br>We have generated a new password for you</p>
                <h4>Passsword: $system_pass</h4>
                <p>Regards,<br>Notes Marketplace</p>";
            $mail->AltBody = '';
            $mail->send();
            $mail_sent = true;
        } catch (Exception $e) {
            $e->getMessage();
        }

        // Message when mail sent to the member
        if ($mail_sent) {

            // Encryption of the System password
            $system_pass = password_hash($system_pass, PASSWORD_BCRYPT);

            // Update password in the DataBase
            $result = mysqli_query($conn, " UPDATE users SET password='$system_pass' WHERE email_id='$email' ");

            echo "<script type='text/javascript'>
                    alert('Your password has been changed successfully and newly generated password is sent on your registered email address.');
                    window.location.href = 'http://localhost/NotesMarketPlace/Front/login-page.php';
                </script>";
        } else {
            echo '<script type="text/javascript">alert("Please try again OR Check Internet Connection");</script>';
        }
    } else {
        $email_error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Title-->
    <title>Document</title>

    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- fontsawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate/animate.css">

    <!--Custome Css-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--Forgot Password Page-->
    <section id="form-page" class="img-fluid">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- top logo -->
                    <div class="form-logo text-center wow zoomIn"><img src="images/top-logo.png" alt="png"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Forgot Password Form -->
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="all-form wow zoomIn">

                        <div class="form-header text-center">
                            <h3>Forgot Password?</h3>
                            <p>Enter your email to reset your password</p>
                        </div>

                        <div class="form-group <?php if ($email_error) {
                                                    echo 'error';
                                                } ?>">
                            <label for="email3">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address">
                            <small>Please enter valid email address</small>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="btn btn-default form-btn">

                    </form>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-3"></div>
            </div>

        </div>
    </section>
    <!-- Ends -->

    <!--JQuery-->
    <script src="js/jquery-3.5.1.js"></script>

    <!--Bootstrap Js-->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Wow js -->
    <script src="js/wow/wow.min.js"></script>

    <!--Custome jQuery-->
    <script src="js/script.js"></script>

</body>

</html>